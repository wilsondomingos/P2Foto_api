<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->namespace('Api')->group(function(){
    Route::prefix('albums')->name('album.')->group(function(){
        Route::resource('/','AlbumController');
        Route::post('/StoreAlbum','AlbumController@StoreAlbum');
 
    });
});


Route::prefix('v1')->namespace('Api')->group(function(){
    Route::prefix('fotos')->name('foto.')->group(function(){
        Route::resource('/','FotoController');
        Route::post('/Storefoto','FotoController@Storefoto');
        
    });
});

Route::prefix('v1')->namespace('Api')->group(function(){
    Route::prefix('user')->name('user.')->group(function(){
        Route::resource('/','UtilizadorController');
        Route::post('/pesquisar','UtilizadorController@pesquisar');
        Route::post('/id','UtilizadorController@id');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');