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

Route::get('/', 'TableController@tabel1');

Route::get('/data-tables', 'TableController@tabel2');
/* Route::get('/', 'HomeController@home');

Route::get('/register', 'AuthController@register');

Route::post('/welcome', 'AuthController@store'); */

/*  
*/

Route::get('/post/create', 'PostController@create');

Route::get('/pertanyaan/create', 'PertanyaanController@create');