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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', 'HomeController@index');
// home page
Route::prefix('/')
    ->namespace('Home')
    ->group(function(){
        // Route::get('/', 'DashboardController@index')
        Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])
            ->name('Home');
    });

// detail page
Route::prefix('detail')
    ->namespace('Detail')
    ->group(function(){
        // Route::get('/', 'DashboardController@index')
        Route::get('/',[App\Http\Controllers\DetailController::class, 'index'])
            ->name('Detail');
    });

//checkout page
Route::prefix('checkout')
    ->namespace('Checkout')
    ->group(function(){
        // Route::get('/', 'DashboardController@index')
        Route::get('/',[App\Http\Controllers\CheckoutController::class, 'index'])
            ->name('Checkout');
    });

// success page
Route::prefix('checkout-success')
    ->namespace('Checkout-success')
    ->group(function(){
        // Route::get('/', 'DashboardController@index')
        Route::get('/',[App\Http\Controllers\CheckoutController::class, 'success'])
            ->name('Checkout-success');
    });

// admin page
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth','admin')
    ->group(function(){
        // Route::get('/', 'DashboardController@index')
        Route::get('/',[App\Http\Controllers\Admin\DashboardController::class, 'index'])
            ->name('dashboard');
    });

    // verifikasi email
Auth::routes(['verify' => true]);

