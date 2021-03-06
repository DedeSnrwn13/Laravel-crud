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


Route::get('/', 'UsersController@index');
Route::post('/create', 'UsersController@create');
Route::get('/delete/{user}','UsersController@destroy');		
Route::get('/user/{user}/edit', 'UsersController@edit');
Route::patch('/','UsersController@update');
