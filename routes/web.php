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
//     return view('index');
// });

Route::get('/single_product', function () {
    return view('single_product');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/','ProjectController@index')->name('indexpage');
Route::get('/single-product/{id}','ProjectController@single_product')->name('single-product');
Route::get('/products','ProjectController@products')->name('products');
Route::get('/cart','CartController@cart')->name('cart');


Route::post('/add_to_cart','CartController@add_to_cart')->name('add_to_cart');

Route::post('/remove_from_cart','CartController@remove_from_cart')->name('remove_from_cart');
Route::post('/edit_product_quantity','CartController@edit_product_quantity')->name('edit_product_quantity');
