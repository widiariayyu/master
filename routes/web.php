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
    return view('v_merk');
});
Route::get('v_jeniskendaraan', function () {
    return view('v_jeniskendaraan');
});
Route::get('v_angkutansewa', function () {
    return view('v_angkutansewa');
});
Route::get('v_taksi', function () {
    return view('v_taksi');
});
Route::get('v_wilayah', function () {
    return view('v_wilayah');
});
Route::get('v_warna', function () {
    return view('v_warna');
});
Route::get('v_kartupengawasan', function () {
    return view('v_kartupengawasan');
});
Route::get('v_pasalmentri', function () {
    return view('v_pasalmentri');
});
