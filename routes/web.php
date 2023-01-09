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
Route::get('/', 'Api\\AlbumController@welcome')->Middleware('auth');
Route::get('ver_fotos/{id}', 'Api\\FotoController@listar_foto')->Middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->Middleware('auth');
