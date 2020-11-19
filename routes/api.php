<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// SANCTUM AREA
Route::middleware('auth:sanctum')->group(function () {
    Route::post('add-product', 'Api\ProductController@addProduct');
    Route::post('update-product', 'Api\ProductController@updateProduct');
    
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
});

// ADMIN AREA
Route::get('company-list', 'Api\AdminController@companyList');
Route::get('product-list', 'Api\AdminController@productList');
Route::get('approving-product/{id}', 'Api\AdminController@approvingProduct');
Route::get('product-list-detail-image/{id}', 'Api\AdminController@productListDetailImage');

Route::get('user-blacklist', 'Api\AdminController@userBlacklist');
Route::get('set-user-active/{id}', 'Api\AdminController@setUserActive');
Route::get('set-user-inactive/{id}', 'Api\AdminController@setUserInActive');

// PUBLIC AREA
Route::post('logout', 'AuthController@logout');
Route::post('login', 'AuthController@login')->name('login');

Route::post('register', 'AuthController@register');

Route::get('products', 'Api\ProductController@index');
Route::get('product-detail/{id}', 'Api\ProductController@productDetail');
Route::get('company-detail/{id}', 'Api\CompanyController@companyDetail');

Route::get('getcategories', 'Api\CategoryController@getCategory');
Route::get('getsubcategories', 'Api\CategoryController@getSubCategory');
Route::get('get-subcategories', 'Api\CategoryController@getSubCategories');



