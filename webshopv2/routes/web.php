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

Route::get('/category/{category}', 'CategoryController@show');
Route::get('/categoryoverview/', 'CategoryController@index');

Route::post('/shoppingcart/store/', 'ShoppingCartController@store');
Route::post('/shoppingcart/remove', 'ShoppingCartController@remove');
Route::get('/shoppingcart/purchase', 'ShoppingCartController@purchase');
Route::get('/shoppingcart', 'ShoppingCartController@show');

Route::get('/user', 'UserController@user');

Auth::routes();

Route::post('/postReview', 'ReviewController@store');

Route::get('/search', 'SearchController@index');

/*Admin*/
Route::get('/admin/dashboard', 'AdminController@index');

Route::get('/admin/products', 'ProductController@index');
Route::get('/admin/products/create', 'ProductController@create');
Route::get('/admin/products/edit/{id}', 'ProductController@edit');
Route::post('/admin/products/edit', 'ProductController@update');
Route::post('/admin/products/store', 'productController@store');
Route::post('/admin/products/remove/{id}', 'ProductController@remove');

Route::get('/admin/users', 'UserController@index');
Route::get('/admin/users/create', 'UserController@create');
Route::get('/admin/users/edit/{id}', 'UserController@edit');
Route::post('/admin/users/edit', 'UserController@update');
Route::post('/admin/users/store', 'UserController@store');
Route::post('/admin/users/remove/{id}', 'UserController@remove');

Route::get('/admin/categories', 'CategoryController@categoryIndex');

/*Pages without controllers*/
Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/category', function () {
    return view('pages/category');
});

Route::get('/database_eer', function () {
    return view('designs/eer');
});