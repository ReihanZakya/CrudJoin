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


Route::get('/tambahsiswa','SiswaController@TambahSiswa');
Route::post('/simpan','SiswaController@SimpanDataSiswa');
Route::get('/tambahdetail/{id}','SiswaController@TambahDetail');
Route::post('/tambahdetail/{id}','SiswaController@SimpanDetail');
Route::get('/biodata','SiswaController@Biodata');
Route::get('/siswa/edit','SiswaController@HomeEdit');
Route::get('/siswa/{id}/edit','SiswaController@edit');
Route::post('/siswa/{id}/update','SiswaController@update');
