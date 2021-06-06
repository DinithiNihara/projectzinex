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
    return view('welcome');
});

Auth::routes(['verify'=> true]); 

Route::get('home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::resource('vehicle', 'App\Http\Controllers\VehicleController');

Route::resource('driver', 'App\Http\Controllers\DriverController');

Route::get('photos','App\Http\Controllers\PhotosController@view')->name('photos');
Route::post('photos/store','App\Http\Controllers\PhotosController@store')->name('photos/store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('offers', 'App\Http\Controllers\OfferController@index')->name('offers');
Route::post('offers/search','App\Http\Controllers\OfferController@search')->name('offers/search');

