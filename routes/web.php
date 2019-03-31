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
    return view('index');
});

Route::get('/index', 'PenggunaController@index');

#penggunaan route untuk administrator
Route::get('/datagejala', 'AdminController@datagejala');


#penggunaan route untuk perawat
Route::get('/pendaftaranpasien', 'PerawatController@pendaftaranpasien');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
