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

Route::get('/','HomeController@index' );
Route::get('/produk', 'ProdukController@index');
Route::get('/produk/detail', 'ProdukController@show');
Route::get('/event', 'EventController@index');
Route::get('/event/detail', 'EventController@show');
Route::get('/pariwisata', 'PariwisataController@index');
Route::get('/pariwisata/detail', 'PariwisataController@show');
Route::get('/covid', 'CovidController@index');
