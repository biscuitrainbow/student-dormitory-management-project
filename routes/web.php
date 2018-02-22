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

Route::get('/room/index','RoomController@index');
Route::get('/room/create','RoomController@create');
Route::get('/room/delete/{room}','RoomController@delete');
Route::post('/room/create','RoomController@store');

Route::get('/customer/index','CustomerController@index');

Route::get('/maintenance/index','MaintenanceController@index');

Route::get('/user/index','UserController@index');


Route::get('/edit','RoomController@edit');



