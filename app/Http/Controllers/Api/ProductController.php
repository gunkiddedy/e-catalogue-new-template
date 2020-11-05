<?php

namespace App\Http\Controllers\Api;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::withFilters()->where('is_active', '1')->orderBy('id', 'desc')->paginate(12);

        return ProductResource::collection($products);
    }

    public function createPost(Request $request)
    {
        DB::transaction(function () use ($request) {
            $name = $request->name;
            $description = $request->description;
            $sni = $request->sni;
            $nomor_sni = $request->nomor_sni;
            $tkdn = $request->tkdn;
            $nilai_tkdn = $request->nilai_tkdn;
            $nomor_sertifikat_tkdn = $request->nomor_sertifikat_tkdn;
            $nomor_laporan_tkdn = $request->nomor_laporan_tkdn;
            $price = $request->price;
            $hs_code = $request->hs_code;
            $images = $request->images;

            if($request->hasFile('images')) {
                foreach($images as $imagex)
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        
                //get file extension
                $extension = $imagex->getClientOriginalExtension();
        
                //filename to store
                $filenametostore = $filename.'_'.$extension;

                $product = Product::create([
                    'name' => $name,
                    'description' => $description,
                    'sni' => $sni,
                    'nomor_sni' => $nomor_sni,
                    'tkdn' => $tkdn,
                    'nilai_tkdn' => $nilai_tkdn,
                    'nomor_sertifikat_tkdn' => $nomor_sertifikat_tkdn,
                    'nomor_laporan_tkdn' => $nomor_laporan_tkdn,
                    'price' => $price,
                    'hs_code' => $hs_code,
                    'image_path' => 'images/'.$filenametostore
                ]);

                foreach($images as $image) {
                    //get filename with extension
                    $filenamewithextension = $image->getClientOriginalName();
            
                    //get filename without extension
                    $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            
                    //get file extension
                    $extension = $image->getClientOriginalExtension();
            
                    $filenametostore = $filename.'_'.$extension;
            
                    $image->storeAs('public/images', $filenametostore);
            
                    $imagePath = public_path('storage/images/'.$filenametostore);
                    $imgSave->save($imagePath);
                    
                    ProductImage::create([
                        'name' => $product->name,
                        'product_id' => $product->id,
                        'image_path' => 'images/'.$filenametostore,
                    ]);
                }
                
            }
        });
        
        return response()->json(200);
    }
}
