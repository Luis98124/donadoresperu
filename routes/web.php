<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\DonadoreController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('banner','App\Http\Controllers\BannerController');
Route::resource('donadore','App\Http\Controllers\DonadoreController');
Route::resource('solicituds','App\Http\Controllers\SolicitudController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::redirect('/home','http://localhost/donadoresperu/public/banner');
Route::redirect('/', 'http://localhost/donadoresperu/public/banner');
Route::get('/nuevo', 'App\Http\Controllers\BannerController@nuevo')->name('banner.nuevo');
Route::get('/mapa', 'App\Http\Controllers\BannerController@mapa')->name('banner.mapa');
