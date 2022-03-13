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

Route::get('/', function () {
    return view('index');
});

Route::resource('users', 'UsersController');
Route::resource('menu', 'MenuController');
Route::resource('meja', 'MejaController');
Route::resource('transaksi', 'TransaksiController');
Route::resource('orderan', 'OrderanController');

Route::get('login', 'AuthController@login');
Route::post('doLogin', 'AuthController@doLogin');
Route::get('logout', 'AuthController@logout');
