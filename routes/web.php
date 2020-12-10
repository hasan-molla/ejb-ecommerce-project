<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Page Url 
Route::get('/', 'PageController@home')->name('home');
Route::get('/shop', 'PageController@products')->name('shop');

Route::get('/shop/{product}', 'PageController@show')->name('shop.show');

Route::get('/product', 'PageController@product')->name('product');
Route::get('/cart', 'PageController@cart')->name('cart');
Route::get('/checkout', 'PageController@checkout')->name('checkout');
Route::get('/thankyou', 'PageController@thankyou')->name('thankyou');

// Authenticate Pages 
Auth::routes();
Route::get('/home', 'HomeController@index')->name('profile');
