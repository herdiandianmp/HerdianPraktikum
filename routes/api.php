<?php

use Illuminate\Http\Request;

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

Route::get('/person','ControllerPerson@all');
Route::get('/person/{id}','ControllerPerson@show');
Route::post('/person','ControllerPerson@store');
Route::put('/person/{id}','ControllerPerson@update');
Route::delete('/person/{id}','ControllerPerson@delete');