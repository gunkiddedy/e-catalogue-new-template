<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'HomeController@login')->name('login.page');
Route::get('/signup', 'HomeController@signup')->name('signup.page');
Route::get('/company-page', 'HomeController@companyPage')->name('company.page');
Route::get('/company-list', 'HomeController@companyList')->name('company.list');
Route::get('/product-detail', 'HomeController@productDetail')->name('product.page');

