<?php

$S = 'App\\Controllers\\';

Route::get('/home', $S . 'UserController@home');
Route::get('/user', $S . 'UserController@tampil');
Route::get('/user/add', $S . 'UserController@add');
Route::post('/user/simpan', $S . 'UserController@simpan');
Route::get('/user/edit/{id}', $S . 'UserController@edit');
Route::post('/user/prosessimpan/{id}', $S . 'UserController@prosessimpan');
Route::get('/user/hapus/{id}', $S . 'UserController@hapus');

Route::get('/pelanggan', $S . 'PelangganController@tampil');
Route::get('/pelanggan/add', $S . 'PelangganController@add');
Route::post('/pelanggan/simpan', $S . 'PelangganController@simpan');
Route::get('/pelanggan/edit/{id}', $S . 'PelangganController@edit');
Route::post('/pelanggan/prosessimpan/{id}', $S . 'PelangganController@prosessimpan');
Route::get('/pelanggan/hapus/{id}', $S . 'PelangganController@hapus');

Route::get('/transaksi', $S . 'TransaksiController@tampil');
Route::get('/transaksi/add', $S . 'TransaksiController@add');
Route::post('/transaksi/simpan', $S . 'TransaksiController@simpan');
Route::get('/transaksi/edit/{id}', $S . 'TransaksiController@edit');
Route::post('/transaksi/prosessimpan/{id}', $S . 'TransaksiController@prosessimpan');
Route::get('/transaksi/hapus/{id}', $S . 'TransaksiController@hapus');

Route::get('/login', 'App\\Controllers\\LoginController@index');
Route::post('/login/proses', 'App\\Controllers\\LoginController@prosesLogin');
Route::get('/login/logout', 'App\\Controllers\\LoginController@doLogout');
