<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index')->name('index');
Route::get('/about','HomeController@about')->name('about');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/cart','HomeController@cart')->name('cart');
Route::get('/checkout','HomeController@checkout')->name('checkout');
Route::get('/allProducts','HomeController@allProducts')->name('allProducts');
Route::get('/productDetails','HomeController@productDetails')->name('productDetails');
Route::get('/productByCategory','HomeController@productByCategory')->name('productByCategory');
Route::get('/productByBrand','HomeController@productByBrand')->name('productByBrand');
Route::get('/customerLogin','HomeController@customerLogin')->name('customerLogin');
Route::get('/customerProfile','HomeController@customerProfile')->name('customerProfile');

