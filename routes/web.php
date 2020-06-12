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
    return redirect('/home');
});

Route::get('/home','homecontroller@index');
Route::get('/login','authcontroller@login')->name('login');
Route::post('/postlogin','authcontroller@postlogin');
Route::get('/logout','authcontroller@logout');
Route::get('/customer','customercontroller@index');

Route::get('/pengunjung','pengunjungcontroller@index');
Route::post('/pengunjung/create','pengunjungcontroller@create');
Route::get('/pengunjung/{id}/edit','pengunjungcontroller@edit');
Route::post('/pengunjung/{id}/update','pengunjungcontroller@update');
Route::get('/pengunjung/{id}/delete','pengunjungcontroller@delete');


Route::group(['middleware' => ['auth','checkRole:admin']], function(){

    Route::get('/transaksi','transaksicontroller@index');
    Route::post('/transaksi/create','transaksicontroller@create');
    Route::get('/transaksi/{id}/edit','transaksicontroller@edit');
    Route::post('/transaksi/{id}/update','transaksicontroller@update');
    Route::get('/transaksi/{id}/delete','transaksicontroller@delete');

    Route::get('/kamar','kamarcontroller@index');
    Route::post('/kamar/create','kamarcontroller@create');
    Route::get('/kamar/{id}/edit','kamarcontroller@edit');
    Route::post('/kamar/{id}/update','kamarcontroller@update');
    Route::get('/kamar/{id}/delete','kamarcontroller@delete');

    Route::get('/dashboard','dashboardcontroller@index');

    Route::get('/hotel','hotelcontroller@index');
    Route::post('/hotel/create','hotelcontroller@create');
    Route::get('/hotel/{id}/edit','hotelcontroller@edit');
    Route::post('/hotel/{id}/update','hotelcontroller@update');
    Route::get('/hotel/{id}/delete','hotelcontroller@delete');
});

Route::group(['middleware' => ['auth','checkRole:admin,pegawai']], function(){
    Route::get('/dashboard','dashboardcontroller@index');


    Route::get('/kamar','kamarcontroller@index');
    Route::post('/kamar/create','kamarcontroller@create');
    Route::get('/kamar/{id}/edit','kamarcontroller@edit');
    Route::post('/kamar/{id}/update','kamarcontroller@update');
    Route::get('/kamar/{id}/delete','kamarcontroller@delete');


});
