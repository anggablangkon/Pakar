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
Route::get('/datajeniskulit', 'AdminController@datajeniskulit');
Route::get('/datakerusakankulit', 'AdminController@datakerusakankulit');
Route::get('/datatindakan', 'AdminController@datatindakan');
Route::get('/datacream', 'AdminController@datacream');
Route::post('/simpanjeniskulit', 'AdminController@simpanjeniskulit');
Route::post('/simpankerusakankulit', 'AdminController@simpankerusakankulit');
Route::post('/simpantindakan', 'AdminController@simpantindakan');
Route::post('/simpandatacream', 'AdminController@simpandatacream');

#proses update
Route::post('/editjeniskulit/{id}','AdminController@editJenisKulit');
Route::post('/editkerusakankulit/{id}','AdminController@editkerusakankulit');
Route::post('/edittindakan/{id}','AdminController@edittindakan');
Route::post('/editcream/{id}','AdminController@editcream');

#proses delete
Route::get('/deletejeniskulit/kdjensikulit={id}', 'AdminController@deletejeniskulit');
Route::get('/deletekerusakankulit/kdkerusakankulit={id}', 'AdminController@deletekerusakankulit');
Route::get('/deletetindakan/kdtindakan={id}', 'AdminController@deletetindakan');
Route::get('/deletecream/kdcream={id}', 'AdminController@deletecream');


#penggunaan route untuk perawat
Route::get('/pendaftaranpasienbaru', 'PerawatController@pendaftaranpasienbaru');
Route::get('/prosespendaftaranpasienbaru', 'PerawatController@prosespendaftaranpasienbaru');
Route::get('/pendaftaranpasien', 'PerawatController@pendaftaranpasien');
Route::get('/pencarianpasien', 'PerawatController@pencarianpasien');
Route::get('/rekappasistemterdaftar', 'PerawatController@rekappasistemterdaftar');
Route::get('/deleteanggota/Idanggota={id}', 'PerawatController@deleteanggota');


#route aksi untuk pendaftar baru
Route::get('/transkrippendaftaran/Idanggota={id}', 'Admin\PendaftaranController@buktipendaftaran');
Route::get('/idcard/Idanggota={id}', 'Admin\PendaftaranController@idcard');

#route aksi untuk pengguna baru sistem
Route::get('/datapengguna', 'AdminController@datapengguna');


#route aksi untuk digunakan proses data pengguna
Route::post('/createdatapengguna', 'Admin\PenggunaController@buatpengguna');
Route::get('/deletepengguna/Idanggota={id}', 'Admin\PenggunaController@deletedatapengguna');
Route::post('/editpengguna/{id}','Admin\PenggunaController@editPengguna');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
