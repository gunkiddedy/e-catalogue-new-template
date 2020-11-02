<?php

namespace App\Http\Controllers\Api;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::withFilters()->where('is_active', '1')->orderBy('id', 'desc')->paginate(12);

        return ProductResource::collection($products);
    }
}
