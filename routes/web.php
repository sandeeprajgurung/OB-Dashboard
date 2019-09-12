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

Route::get('/', 'PageController@index')->name('home');
Route::get('/form/vegetable', 'VegetableController@index')->name('form.vegetable');
Route::post('/vegetable', 'VegetableController@store');
Route::get('/vegetable', 'VegetableController@show');
Route::post('/vegetable/{id}', 'VegetableController@update');