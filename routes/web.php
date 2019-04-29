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

Route::get('/books', 'BookController@index');
//Open index page and echo index fanction from BookController

Route::get('/book/create', 'BookController@create')->name('create');
//Open index page and echo create fanction from BookController
//To shortcut the URL_name by using '->name()'

Route::post('book/store', 'BookController@store')->name('store');

Route::get('book/{id}', 'BookController@show')->name('show');
//{} mean to create variable for inside name
// {id} → $id

Route::get('book/{id}/edit', 'BookController@edit')->name('edit');

Route::post('book/{id}/update', 'BookController@update')->name('update');

Route::post('book/delete', 'BookController@delete')->name('delete');
