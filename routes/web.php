<?php

use Illuminate\Support\Facades\Route;
use App\User;


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
Route::get('/', 'IndexController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/services', 'PagesController@services')->name('services');
Route::get('/pricing', 'PagesController@pricing')->name('pricing');
Route::get('/shop', 'PagesController@shop')->name('shop');
Route::get('/blog', 'PagesController@blog')->name('blog');
Route::get('/shop/single', 'PagesController@shopSingle')->name('shop-single');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//cretae order
Route::get('/createorder', 'OrderController@createOrder')->name('createorder');
Route::post('/createorder', 'OrderController@saveOrder')->name('createorder');
Route::get('/order/summary', 'OrderController@orderSummary')->name('order_summary');
Route::get('/payment', 'OrderController@payment')->name('payment');
Route::post('stripe', 'StripePaymentController@order')->name('stripe.post');

//store images path into session
Route::post('/store/image/path', 'OrderController@storefilepath')->name('storeimgsession');

Route::get('/preview/images', 'OrderController@previewImages')->name('previewimages');

Route::post('/channels/authorize', 'PusherAuthorizeController@channelAuthorize');

Route::get('/orders', 'OrderController@showorderss')->name('showorders');

Route::post('get/orders', 'OrderController@showorders_ajax')->name('showordersajx');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::post('update/profile', 'ProfileController@updateProfile')->name('updateprofile');

Route::post('image/delete', 'OrderController@deleteImage')->name('deleteimage');








