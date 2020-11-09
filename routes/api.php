<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products', 'Api\ProductController@index');
Route::post('add-product', 'Api\ProductController@addProduct');
Route::get('product-detail/{id}', 'Api\ProductController@productDetail');

Route::get('company-detail/{id}', 'Api\CompanyController@companyDetail');

Route::get('getcategories', 'Api\CategoryController@getCategory');
Route::get('getsubcategories', 'Api\CategoryController@getSubCategory');
