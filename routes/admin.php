<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'Admin'], function () {
    Route::get('','HomeController@index');
    Route::post('login','AuthController@login');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('logout','AuthController@logout');
        Route::group(['prefix' => 'categories'], function () {
            Route::get('','CategoryController@index');
        });
        Route::group(['prefix' => 'users'], function () {
            Route::get('','UserController@index');
        });
        Route::group(['prefix' => 'requests'], function () {
            Route::get('','RequestController@index');
        });
    });
});
