<?php

namespace App\Http\Controllers\Api;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::withFilters()->where('is_active', '1')->orderBy('id', 'desc')->paginate(12);

        return ProductResource::collection($products);
    }

    public function createPost(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=> 'required|min:20',
            'price' => 'required',
            'hs_code' => 'required|min:3',
            'category_id' => 'required',
            'images' => 'required'
        ]); 

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
            $category_id = $request->category_id;
            $subcategory_id = $request->subcategory_id;
            $images = $request->images;
            $user_id = 2;
            $company_name = 'PT.SIDO MUNCUL';

            if($request->hasFile('images')) {
                foreach($images as $image_product)
                //get filename with extension
                $filenamewithextension = $image_product->getClientOriginalName();

                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        
                //get file extension
                $extension = $image_product->getClientOriginalExtension();
        
                //filename to store
                $filenametostore = $filename.'_'.$user_id.'.'.$extension;

                $product = Product::create([
                    'user_id' => $user_id,
                    'company_name' => $company_name,
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
                    'category_id' => $category_id,
                    'subcategory_id' => $subcategory_id,
                    'image_path' => 'images/'.$filenametostore
                ]);

                // store each image
                foreach($images as $image) {
                    //get filename with extension
                    $filenamewithextension = $image->getClientOriginalName();
            
                    //get filename without extension
                    $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            
                    //get file extension
                    $extension = $image->getClientOriginalExtension();
            
                    //filename to store
                    $filenametostore = $filename.'_'.$user_id.'.'.$extension;
            
                    //Upload File
                    $image->storeAs('public/images', $filenametostore);
            
                    $imagePath = public_path('storage/images/'.$filenametostore);

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
