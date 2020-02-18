<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/{any}', function () {
    $data = array('menu' => 'person', );
    return view('person', $data);
})->where('any','.*');

// Route::get('/person','ControllerPerson@all');
// Route::get('/person/{id}','ControllerPerson@show');
// Route::post('/person','ControllerPerson@store');
// Route::put('/person/{id}','ControllerPerson@update');
// Route::delete('/person/{id}','ControllerPerson@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
