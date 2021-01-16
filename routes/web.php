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
Route::get('/about', 'CovidController@about');
Route::get('/symptoms', 'CovidController@symptoms');
Route::get('/contact', 'CovidController@contact');
Route::get('/covid', 'CovidController@covid');