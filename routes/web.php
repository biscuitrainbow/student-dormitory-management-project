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

Route::get('/room/index','RoomController@index')->middleware('auth');
Route::get('/room/create','RoomController@create')->middleware('auth');
Route::get('/room/delete/{room}','RoomController@delete')->middleware('auth');
Route::post('/room/create','RoomController@store')->middleware('auth');

Route::get('/customer/index','CustomerController@index')->middleware('auth');

Route::get('/maintenance/index','MaintenanceController@index')->middleware('auth');

Route::get('/user/index','UserController@index')->middleware('auth');

Route::get('/login','UserController@login')->name('login');
Route::get('/logout','UserController@logout')->middleware('auth');

Route::get('/signup','UserController@signup');
Route::post('/signup','UserController@store');

Route::post('/login','UserController@authenticate');

Route::get('/dashboard','DashboardController@index')->middleware('auth');




Route::get('/edit','RoomController@edit')->middleware('auth');



