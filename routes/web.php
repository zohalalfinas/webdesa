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
Route::get('/event/detail/{id}', 'EventController@show');
Route::get('/pariwisata', 'PariwisataController@index');
Route::get('/pariwisata/detail/{id}', 'PariwisataController@show');
Route::get('/covid', 'CovidController@index');

// Halaman Admin
    // get 
Route::get('/admin', 'DashboardController@index')->name('dashboard.admin');
Route::get('/event-admin', 'EventController@event')->name('event.admin');
Route::get('/pariwisata-admin', 'PariwisataController@pariwisata')->name('pariwisata.admin');
Route::get('/produk-admin', 'ProdukController@produk')->name('produk.admin');

    // post 
Route::post('/tambah-event' , 'EventController@store')->name('tambah.event');
Route::post('/tambah-pariwisata' , 'PariwisataController@store')->name('tambah.pariwisata');

    // patch 
Route::match(['post' , 'patch'],'/ubah-event/{id}', 'EventController@update')->name('update.event');
Route::match(['post' , 'patch'],'/ubah-pariwisata/{id}', 'PariwisataController@update')->name('update.pariwisata');

    // delete 
Route::delete('/hapus-event/{id}', 'EventController@destroy')->name('delete.event');
Route::delete('/hapus-pariwisata/{id}', 'PariwisataController@destroy')->name('delete.pariwisata');