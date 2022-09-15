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

Route::get('/', 'UserController@home')->name('home');
Route::get('/detail/{produk}', 'UserController@detail')->name('detail');

Route::get('/login', 'UserController@login')->name('login');
Route::post('/postlogin', 'UserController@postlogin')->name('postlogin');

Route::get('/regist', 'UserController@regist')->name('regist');
Route::post('/postregist', 'UserController@postregist')->name('postregist');





Route::middleware('auth')->group(function () {
    Route::get('/logout', 'UserController@logout')->name('logout');

    Route::get('/keranjang', 'UserController@keranjang')->name('keranjang');
    Route::post('/postkeranjang/{produk}', 'UserController@postkeranjang')->name('postkeranjang');

    Route::get('/bayar', 'UserController@bayar')->name('bayar');
Route::get('/summary', 'UserController@summary')->name('summary');

});
