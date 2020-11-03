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
//     return view('welcome');
// });

Route::get('/','MainController@index');
Route::get('/detail','MainController@detail_place');
Route::get('/login','MainController@login');
Route::get('/checkout','MainController@checkout');
Route::get('/confirmation','MainController@confirmation');