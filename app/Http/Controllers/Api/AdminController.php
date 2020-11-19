<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function companyList()
    {
        $companies = User::where([
            ['role', '=', 'member'],
            ['is_blacklist', '=', 0]
        ])->orderBy('is_active')->get();
                
        return response()->json($companies);
    }

    public function userBlacklist()
    {   
        $users = User::where('is_blacklist', '=', 1)->get();

        return response()->json($users);
    }

    public function approvingProduct($id)
    {
        $product = Product::find($id);
        $product->is_active = 1;
        $product->save();
        
        return response()->json('product successfuly updated');
    }

    public function setUserActive($id)
    {
        $user = User::find($id);
        $user->is_active = 1;
        $user->is_blacklist = 0;
        $user->save();
        
        return response()->json('user successfuly activated');
    }

    public function setUserInActive($id)
    {
        $user = User::find($id);
        $user->is_active = 0;
        $user->is_blacklist = 1;
        $user->save();
        
        return response()->json('user successfuly disabled');
    }

    // public function blacklistUser($id)
    // {
    //     $user = User::find($id);
    //     $user->is_blacklist = 1;
    //     $user->save();
        
    //     return response()->json('user successfuly disabled');
    // }

    public function productList()
    {
        $products = Product::orderBy('is_active')->get();

        return response()->json($products);
    }

    public function productListDetailImage($id)
    {
        // $product = Product::find($id);
        $images = ProductImage::where('product_id', $id)->with('product')->get();
        // $company = Product::find($id)->user;
        // $category = Product::find($id)->category;
        // $subcategory = Product::find($id)->subcategory;
        
        return response()->json([
            // 'product' => $product,
            'images' => $images,
            // 'company' => $company,
            // 'category' => $category,
            // 'subcategory' => $subcategory,
        ]);
    }

}
