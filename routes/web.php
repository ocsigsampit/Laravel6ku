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

Route::get('register', 'RegisterController@index')->name('register.index');
Route::get('register/create', 'RegisterController@create')->name('register.create');
Route::get('register/proses-form', 'RegisterController@prosesForm');
Route::get('register/edit', 'RegisterController@edit')->name('register.edit');
Route::get('register/destroy', 'RegisterController@destroy')->name('register.delete');
