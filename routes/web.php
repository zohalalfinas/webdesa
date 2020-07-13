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
Route::get('/covid/video', 'CovidController@v_video');
Route::get('/covid/artikel', 'CovidController@v_artikel');
Route::get('/covid/artikel/detail/{id}', 'CovidController@show_artikel');

// Halaman Admin
    // get 
Route::get('/admin', 'DashboardController@index')->name('dashboard.admin');
Route::get('/event-admin', 'EventController@event')->name('event.admin');
Route::get('/pariwisata-admin', 'PariwisataController@pariwisata')->name('pariwisata.admin');
Route::get('/produk-admin', 'ProdukController@produk')->name('produk.admin');
Route::get('/infografik-admin', 'CovidController@infografik')->name('infografik.admin');
Route::get('/video-admin', 'CovidController@video')->name('video.admin');
Route::get('/artikel-admin', 'CovidController@artikel')->name('artikel.admin');

    // post 
Route::post('/tambah-event' , 'EventController@store')->name('tambah.event');
Route::post('/tambah-pariwisata' , 'PariwisataController@store')->name('tambah.pariwisata');
Route::post('/tambah-infografik', 'CovidController@store_infografik')->name('tambah.infografik');
Route::post('/tambah-video', 'CovidController@store_video')->name('tambah.video');
Route::post('/tambah-artikel', 'CovidController@store_artikel')->name('tambah.artikel');

    // patch 
Route::match(['post' , 'patch'],'/ubah-event/{id}', 'EventController@update')->name('update.event');
Route::match(['post' , 'patch'],'/ubah-pariwisata/{id}', 'PariwisataController@update')->name('update.pariwisata');
Route::match(['post' , 'patch'],'/ubah-infografik/{id}', 'CovidController@update_infografik')->name('update.infografik');
Route::match(['post' , 'patch'],'/ubah-video/{id}', 'CovidController@update_video')->name('update.video');
Route::match(['post' , 'patch'],'/ubah-artikel/{id}', 'CovidController@update_artikel')->name('update.artikel');
Route::match(['post' , 'patch'],'/ubah-grafik/{id}', 'CovidController@update_grafik')->name('update.grafik');


    // delete 
Route::delete('/hapus-event/{id}', 'EventController@destroy')->name('delete.event');
Route::delete('/hapus-pariwisata/{id}', 'PariwisataController@destroy')->name('delete.pariwisata');
Route::delete('/hapus-infografik/{id}', 'CovidController@destroy_infografik')->name('delete.infografik');
Route::delete('/hapus-video/{id}', 'CovidController@destroy_video')->name('delete.video');
Route::delete('/hapus-artikel/{id}', 'CovidController@destroy_artikel')->name('delete.artikel');