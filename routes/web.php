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

Route::get('/', 'UsuarioController@index');
Route::get('create', 'UsuarioController@create');
Route::post('store', 'UsuarioController@store');
Route::post('login', 'UsuarioController@login');
Route::get('hackear/1', 'UsuarioController@hackear');