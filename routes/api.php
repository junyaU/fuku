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

//トップス
Route::get('/tops' , 'TopsController@index');
Route::post('/tops' , 'TopsController@store');

//ボトムス
Route::get('/bottoms' , 'BottomsController@index');
Route::post('/bottoms' , 'BottomsController@store');

//シューズ
Route::get('/shoes' , 'ShoesController@index');
Route::post('/shoes' , 'ShoesController@store');