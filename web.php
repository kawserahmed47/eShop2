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

//Home Controller

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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


//Dashboard Controller
Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');

//Admin Coontroller
Route::get('/adminLogin','AdminController@adminLogin')->name('adminLogin');
Route::get('/adminRegister','AdminController@adminRegister')->name('adminRegister');
Route::post('/registerAdmin','AdminController@registerAdmin')->name('registerAdmin');
Route::get('/adminLogout','AdminController@adminLogout')->name('adminLogout');

Route::post('/loginCheck','AdminController@loginCheck')->name('loginCheck');

Route::get('/viewAdmins','AdminController@viewAdmins')->name('viewAdmins');

//Brand Controller
Route::get('/addBrand','BrandController@addBrand')->name('addBrand');
Route::post('/insertBrand','BrandController@insertBrand')->name('insertBrand');
Route::get('/viewBrands','BrandController@viewBrands')->name('viewBrands');
Route::get('/editBrand/{id}','BrandController@editBrand')->name('editBrand');
Route::post('/updateBrand/{id}', 'BrandController@updateBrand')->name('updateBrand');
Route::get('/deleteBrand/{id}','BrandController@deleteBrand')->name('deleteBrand');

//Category Controller
Route::get('/addCategory','CategoryController@addCategory')->name('addCategory');
Route::post('/insertCategory','CategoryController@insertCategory')->name('insertCategory');
Route::get('/viewCategories','CategoryController@viewCategories')->name('viewCategories');
Route::get('/editCategory/{id}','CategoryController@editCategory')->name('editCategory');
Route::post('/updateCategory/{id}','CategoryController@updateCategory')->name('updateCategory');
Route::get('/deleteCategory/{id}','CategoryController@deleteCategory')->name('deleteCategory');



//Product Controller
Route::get('/addProduct','ProductController@addProduct')->name('addProduct');
Route::get('/viewProducts','ProductController@viewProducts')->name('viewProducts');
Route::get('/editProduct','ProductController@editProduct')->name('editProduct');

//Slider Controller
Route::get('/addSlider','SliderController@addSlider')->name('addSlider');
Route::get('/viewSliders','SliderController@viewSliders')->name('viewSliders');
Route::get('/editSlider','SliderController@editSlider')->name('editSlider');

//Order Controller
Route::get('/viewOrders','OrderController@viewOrders')->name('viewOrders');

//Message Controller
Route::get('/viewMessages','MessageController@viewMessages')->name('viewMessages');


