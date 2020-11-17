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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->group(function () {
    Route::post('add-product', 'Api\ProductController@addProduct');
    Route::post('update-product', 'Api\ProductController@updateProduct');
    
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
});


Route::get('members', 'Api\MemberController@index');
Route::get('member-products/{id}', 'Api\MemberController@memberProducts');
Route::post('logout', 'AuthController@logout');
Route::post('login', 'AuthController@login')->name('login');

Route::post('register', 'AuthController@register');

Route::get('products', 'Api\ProductController@index');
Route::get('product-detail/{id}', 'Api\ProductController@productDetail');
Route::get('company-detail/{id}', 'Api\CompanyController@companyDetail');

Route::get('getcategories', 'Api\CategoryController@getCategory');
Route::get('getsubcategories', 'Api\CategoryController@getSubCategory');
Route::get('get-subcategories', 'Api\CategoryController@getSubCategories');



