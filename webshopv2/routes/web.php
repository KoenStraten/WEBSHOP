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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
    return view('pages/product');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/category', function () {
    return view('pages/category');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
