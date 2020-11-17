<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function index()
    {
        $members = User::with('products')->where('role', '=', 'member')->get();
                
        return response()->json($members);
    }

    public function memberProducts($id)
    {   
        $products = Product::where('user_id', $id)->get();

        return response()->json([ 'member_products' => $products]);
    }
}
