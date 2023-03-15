<?php

use App\Http\Controllers\CheckoutController;
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
    return view('index');
});
Route::view('/about', 'pages/about')->name('about');
Route::view('/products', 'pages/products')->name('products');
Route::view('/shop', 'pages/shop')->name('shop');
Route::view('/contact', 'pages/contact')->name('contact');
Route::view('/comingsoon', 'pages/coming_soon')->name('comingsoon');
Route::view('/maizeflour', 'pages/flour_shop')->name('maizeflour');
Route::view('/feeds', 'pages/feeds_shop')->name('feeds');
Route::view('/checkout', 'pages/checkout')->name('checkout');
Route::post('/pay', [CheckoutController::class, 'pay'])->name('pay');
Route::any('/callback', [CheckoutController::class, 'callback'])->name('callback');
