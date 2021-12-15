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

Route::get('praktikum1', function () {
    return view('prak1'); //ulangi untuk tugas 4
});

Route::get('tugas4', function () {
    return view('showtugas4');
});

Route::get('praktikum2', 'ViewController@showPraktikum2'); //ulangi untuk ETS, tugas php

Route::get('ets', 'ViewController@showETS');

Route::get('form', 'ViewController@showForm');
Route::post('faktorial', 'ViewController@showFaktorial');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

//absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');
Route::get('/absen/detail/{id}','AbsenController@view');

//route sepeda
Route::get('/sepeda','SepedaController@index');
Route::get('/sepeda/tambah','SepedaController@tambah');
Route::post('/sepeda/store','SepedaController@store');
Route::get('/sepeda/edit/{id}','SepedaController@edit');
Route::post('/sepeda/update','SepedaController@update');
Route::get('/sepeda/hapus/{id}','SepedaController@hapus');
Route::get('/sepeda/cari','SepedaController@cari');
Route::get('/sepeda/detail/{id}','SepedaController@view');

//karyawan1
Route::get('/karyawan1','KaryawanController@index');
Route::get('/karyawan1/tambah','KaryawanController@tambah');
Route::post('/karyawan1/store','KaryawanController@store');
Route::get('/karyawan1/hapus/{id}','KaryawanController@hapus');
