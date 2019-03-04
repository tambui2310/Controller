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

Route::get('/', function () {
    return view('welcome');
});
// Tạo 1 nhóm route với tiền tố customer
Route::prefix('customer')->group(function() {

    Route::get('index', 'CustomerController@index');

    Route::get('add', 'CustomerController@add');

    Route::post('add', 'CustomerController@store');

    Route::get('show/{id}', 'CustomerController@show');

    Route::post('edit/{id}', 'CustomerController@update');

    Route::get('edit/{id}', 'CustomerController@edit');

    Route::get('index/{id}', 'CustomerController@delete');
});