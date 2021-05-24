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
Route::prefix('/')
    ->namespace('Home')
    ->group(function(){
        // Route::get('/', 'DashboardController@index')
        Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])
            ->name('Home');
    });


Route::prefix('admin')
    ->namespace('Admin')
    ->group(function(){
        // Route::get('/', 'DashboardController@index')
        Route::get('/',[App\Http\Controllers\Admin\DashboardController::class, 'index'])
            ->name('dashboard');
    });
