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
Auth::routes();

Route::namespace("Admin")->prefix('admin')->group(function(){

});

Route::get('/', 'App\Http\Controllers\TrainController@addTrain');
Route::get('/add', 'App\Http\Controllers\TrainController@addTrain');
Route::post('/create', 'App\Http\Controllers\TrainController@submitTrainData');
Route::post('/book', 'App\Http\Controllers\TrainController@bookTrainSeats');
Route::get('/view', 'App\Http\Controllers\TrainController@fetchAllTrains');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
