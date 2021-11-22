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

//absen
Route::get('/absen','AbsenController@view');
Route::get('/absen/nambah','AbsenController@nambah');
Route::post('/absen/save','AbsenController@save');
Route::get('/absen/ngedit/{id}','AbsenController@ngedit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

