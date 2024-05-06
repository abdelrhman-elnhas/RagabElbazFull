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

Route::group(['namespace' => 'Api'], function () {
    Route::group(['prefix' => 'user'], function () {
        Route::post('login','AuthController@login');
        Route::post('register/user','AuthController@registerUser');
        Route::post('register/worker','AuthController@registerWorker');
        Route::post('delete','AuthController@delete');
    });
    Route::get('statistics','HomeController@statistics');
    Route::group(['prefix' => 'reviews'], function () {
        Route::get('last','ReviewController@last');
        Route::get('all','ReviewController@all');
    });
    Route::get('categories','HomeController@categories');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::group(['prefix' => 'user'], function () {
            Route::get('profile/worker','AuthController@profileWorker');
            Route::get('profile/user','AuthController@profileUser');
            Route::post('update','AuthController@update');
            Route::post('logout','AuthController@logout');
        });
        Route::group(['prefix' => 'notifications'], function () {
            Route::get('all','NotificationController@index');
            Route::delete('delete','NotificationController@delete');
            Route::delete('delete/all','NotificationController@deleteAll');
        });
        Route::group(['prefix' => 'requests'], function () {
            Route::get('worker/all','RequestController@index');
            Route::get('worker/status/{status}','RequestController@index2');
            Route::get('User/all','RequestController@index3');
            Route::get('show/{id}','RequestController@show');
            Route::post('accept','RequestController@accept');
            Route::post('refuse','RequestController@refuse');
            Route::post('close','RequestController@close');
            Route::post('change/status','RequestController@status');
            Route::post('review','RequestController@review');
            Route::post('add/problem','RequestController@addProblem');
        });
        Route::group(['prefix' => 'services'], function () {
            Route::get('all','ServiceController@index');
            Route::get('show/{id}','ServiceController@show');
            Route::get('nearby/workers','ServiceController@nearby');
        });
        // Route::get('search','HomeController@search');
    });
});
