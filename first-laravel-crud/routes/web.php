<?php

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

Route::get('/', 'ProductsController@home');
Route::get('/products', 'ProductsController@viewProduct');
Route::get('/edit/{id}', 'ProductsController@edit');
Route::post('/store','ProductsController@store');
Route::patch('/update/{id}','ProductsController@update');
Route::delete('/delete/{id}', 'ProductsController@delete');
