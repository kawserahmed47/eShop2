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

// use App\Http\Controllers\CartController;
// use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index')->name('index');
Route::get('/about','HomeController@about')->name('about');
Route::post('/searchitem','HomeController@searchitem')->name('searchitem');

Route::get('/allProducts','HomeController@allProducts')->name('allProducts');

Route::get('/success','HomeController@success')->name('success');

Route::get('/productDetails/{slug}','HomeController@productDetails')->name('productDetails');

Route::get('/productByCategory/{slug}','HomeController@productByCategory')->name('productByCategory');
Route::get('/productByBrand/{slug}','HomeController@productByBrand')->name('productByBrand');


Route::get('/customerLogin','CustomerController@customerLogin')->name('customerLogin');
Route::post('/customerRegister','CustomerController@customerRegister')->name('customerRegister');
Route::post('/customerLoginCheck','CustomerController@customerLoginCheck')->name('customerLoginCheck');
Route::get('/customerProfile/{id}','CustomerController@customerProfile')->name('customerProfile');
Route::get('/customerLogout','CustomerController@customerLogout')->name('customerLogout');

Route::post('/insertCart/{id}', 'CartController@insertCart')->name('insertCart');
Route::get('/cart','CartController@cart')->name('cart');
Route::get('/cartDelete/{id}','CartController@cartDelete')->name('cartDelete');
Route::post('/updateCart/{id}','CartController@updateCart')->name('updateCart');
Route::get('/clearCart','CartController@clearCart')->name('clearCart');
Route::get('/checkout','CartController@checkout')->name('checkout')->middleware('customer');
Route::post('/insertShipping','CartController@insertShipping')->name('insertShipping');
Route::post('/updateShipping','CartController@updateShipping')->name('updateShipping');
Route::get('/orderByCash','CartController@orderByCash')->name('orderByCash');


//Dashboard Controller
Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');

//Admin Coontroller
Route::get('/adminLogin','AdminController@adminLogin')->name('adminLogin');
Route::get('/adminRegister','AdminController@adminRegister')->name('adminRegister');
Route::post('/registerAdmin','AdminController@registerAdmin')->name('registerAdmin');
Route::get('/adminLogout','AdminController@adminLogout')->name('adminLogout');

Route::post('/loginCheck','AdminController@loginCheck')->name('loginCheck');

Route::get('/viewAdmins','DashboardController@viewAdmins')->name('viewAdmins');
Route::get('/editAdmin/{id}','DashboardController@editAdmin')->name('editAdmin');
Route::post('/adminUpdate/{id}','DashboardController@adminUpdate')->name('adminUpdate');
Route::get('/deleteAdmin/{id}','DashboardController@deleteAdmin')->name('deleteAdmin');
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
Route::get('/editProduct/{id}','ProductController@editProduct')->name('editProduct');
Route::post('/insertProduct','ProductController@insertProduct')->name('insertProduct');
Route::post('/updateProduct/{id}','ProductController@updateProduct')->name('updateProduct');
Route::get('deleteProduct/{id}','ProductController@deleteProduct')->name('deleteProduct');

//Slider Controller
Route::get('/addSlider','SliderController@addSlider')->name('addSlider');
Route::post('/insertSlider','SliderController@insertSlider')->name('insertSlider');
Route::get('/viewSliders','SliderController@viewSliders')->name('viewSliders');
Route::get('/editSlider/{id}','SliderController@editSlider')->name('editSlider');
Route::post('/updateSlider/{id}','SliderController@updateSlider')->name('updateSlider');
Route::get('/deleteSlider/{id}','SliderController@deleteSlider')->name('deleteSlider');

//Order Controller
Route::get('/viewOrders','OrderController@viewOrders')->name('viewOrders');
Route::get('/makeSuccess/{id}','OrderController@makeSuccess')->name('makeSuccess');
Route::get('/deleteOrder/{id}','OrderController@deleteOrder')->name('deleteOrder');
Route::get('/orderinfo/{id}','OrderController@orderinfo')->name('orderinfo');

//Contact Controller
Route::post('/insertContact','ContactController@insertContact')->name('insertContact');
Route::get('/contact','HomeController@contact')->name('contact');

//Message Controller
Route::get('/viewMessages','MessageController@viewMessages')->name('viewMessages');
Route::get('/deleteMessage/{id}','MessageController@deleteMessage')->name('deleteMessage');

//Mail
Route::get('/sendMail','MailController@sendMail')->name('sendMail');

