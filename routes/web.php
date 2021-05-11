<?php

use Illuminate\Support\Facades\Route;

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

Route::get('create','UserController@create');
Route::post('user_store','UserController@store');
Route::get('user_list','UserController@index');
Route::get('user_delete/{id}','UserController@delete');
Route::get('user_edit/{id}','UserController@edit');
Route::post('user_update','UserController@update');
Route::get('n','UserController@show');