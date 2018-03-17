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

Route::get('/', 'HomeController@index');

Route::get('/product/{product}', 'HomeController@show');

Route::get('/category/{category}', 'CategoryController@index');

Route::get('/about', function () {
    return view('pages/about');
});

Route::post('/shoppingcart/store/', 'ShoppingCartController@store');

Route::post('/shoppingcart/remove/', 'ShoppingCartController@remove');

Route::get('/shoppingcart', 'ShoppingCartController@show');

Route::get('/category', function () {
    return view('pages/category');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/postReview', 'ReviewController@store');