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
Route::get('/room/pdf', 'RoomController@pdf')->middleware('auth');
Route::get('/room/index', 'RoomController@index')->middleware('auth');
Route::get('/room/create', 'RoomController@create')->middleware('auth');
Route::get('/room/delete/{room}', 'RoomController@delete')->middleware('auth');
Route::post('/room/create', 'RoomController@store')->middleware('auth');
Route::get('/room/edit/{room}', 'RoomController@edit')->middleware('auth');
Route::post('/room/edit/{room}', 'RoomController@update')->middleware('auth');
Route::get('room/search', 'RoomController@search')->middleware('auth');

Route::get('/customer/index', 'CustomerController@index')->middleware('auth');
Route::get('/customer/create', 'CustomerController@create')->middleware('auth');
Route::post('/customer/create', 'CustomerController@store')->middleware('auth');
Route::get('/customer/edit/{customer}', 'CustomerController@edit')->middleware('auth');
Route::post('/customer/edit/{customer}', 'CustomerController@update')->middleware('auth');
Route::get('/customer/delete/{customer}', 'CustomerController@delete')->middleware('auth');
Route::get('customer/search', 'CustomerController@search')->middleware('auth');
Route::get('/customer/pdf', 'CustomerController@pdf')->middleware('auth');

Route::get('/maintenance/index', 'MaintenanceController@index')->middleware('auth');
Route::get('/maintenance/create', 'MaintenanceController@create')->middleware('auth');
Route::post('/maintenance/create', 'MaintenanceController@store')->middleware('auth');
Route::get('/maintenance/edit/{maintenance}', 'MaintenanceController@edit')->middleware('auth');
Route::post('/maintenance/edit/{maintenance}', 'MaintenanceController@update')->middleware('auth');
Route::get('/maintenance/delete/{maintenance}', 'MaintenanceController@delete')->middleware('auth');
Route::get('maintenance/search', 'MaintenanceController@search')->middleware('auth');
Route::get('/maintenance/pdf', 'MaintenanceController@pdf')->middleware('auth');


Route::get('/user/index', 'UserController@index')->middleware('auth');
Route::get('/user/create', 'UserController@create')->middleware('auth');
Route::post('/user/create', 'UserController@store');
Route::get('/user/edit/{user}', 'UserController@edit')->middleware('auth');
Route::post('/user/edit/{user}', 'UserController@update')->middleware('auth');
Route::get('/user/delete/{user}', 'UserController@delete')->middleware('auth');

Route::get('/login', 'UserController@login')->name('login');
Route::post('/login', 'UserController@authenticate');
Route::get('/logout', 'UserController@logout')->middleware('auth');

// Route::get('/signup','UserController@signup');
Route::get('/signup', 'UserController@create');
Route::post('/signup', 'UserController@store');

Route::get('/dashboard', 'DashboardController@index')->middleware('auth');

Route::resource('invoices', 'InvoiceController', ['except' => ['destroy']])->middleware('auth');
Route::get('/invoices/delete/{invoice}', 'InvoiceController@destroy')->middleware('auth');
Route::get('/invoices/pdf/{invoice}', 'InvoiceController@pdf')->middleware('auth');

Route::get('/contract/index', 'ContractController@index')->middleware('auth');
Route::get('/contract/create', 'ContractController@create')->middleware('auth');
Route::post('/contract/create', 'ContractController@store')->middleware('auth');
Route::get('/contract/edit/{contract}', 'ContractController@edit')->middleware('auth');
Route::post('/contract/edit/{contract}', 'ContractController@update')->middleware('auth');
Route::get('/contract/delete/{contract}', 'ContractController@delete')->middleware('auth');
Route::get('contract/search', 'ContractController@search')->middleware('auth');
Route::get('/contract/pdf', 'ContractController@pdf')->middleware('auth');


Route::view('/chart', 'chart');