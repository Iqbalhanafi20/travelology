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
    // return view('welcome');
// });

Route::prefix('/admin')
->namespace('Admin')
->group(function(){
    Route::get('/','DashboardController@index')
        ->name('dashboard');
});

// // Menampilkan halaman utama
// Route::get('/','MainController@index')->name('utama');

// // Menampilkan halaman detail tempat
// Route::get('/detail','MainController@detail_place');

// // Menampilkan halaman login
// Route::get('/login','MainController@login');

// // Menampilkan halaman checkout
// Route::get('/checkout','MainController@checkout');

// // Menampilkan halaman konfirmasi pemesanan
// Route::get('/confirmation','MainController@confirmation');