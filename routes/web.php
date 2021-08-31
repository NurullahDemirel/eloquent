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

Route::get('/nav', function () {
    return view('nav');
});
Route::get('/weather', function () {
    return view('weather');
});
Route::get('/grid', function () {
    return view('gird');
});
Route::get('/bootstrap', function () {
    return view('bootstrap');
});
Route::get('/model-detay', function () {
    return view('model-detay-donanım özellikleri');
});
Route::get('/0-km', function () {
    return view('0-km anasayfa');
});


