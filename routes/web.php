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
Auth::routes();

Route::get('/', function () {
    if (Auth::guest()) {
    	return view('auth.login');
    }
    else {
    	return redirect('/home');
    }
});
Route::get('/home', 'HomeController@index')->name('home');
// Menu Transaksi
Route::get('/transaksi', 'TransaksiController@index');

// Menu Nasabah
Route::get('/nasabah', 'NasabahController@index');
Route::get('/nasabah-kolektif', 'NasabahController@indexkolektif');
Route::get('/nasabah-tambah', 'NasabahController@getFormTambahNasabah');
Route::post('/nasabah-tambah', 'NasabahController@setFormTambahNasabah');

// Menu Sampah
Route::get('/datasampah', 'SampahController@index');
Route::get('/datasampah-tambah', 'SampahController@getFormTambahDataSampah');
Route::post('/datasampah-tambah', 'SampahController@setFormTambahDataSampah');
Route::post('/datasampah-edit', 'SampahController@editFormTambahDataSampah');
// Menu Rapot
Route::get('/rapotnasabah', 'RapotController@index');
Route::get('/rapotnasabah-pertahun', 'RapotController@indexpertahun');
Route::get('/rapotnasabah-perwilayah', 'RapotController@indexperwilayah');
//Menu Buku Tabungan
Route::get('/bukutabungan', 'TabunganController@index');
Route::post('/bukutabungan', 'TabunganController@index');

// Route::get('/listnasabah', function () {
//     return view('admin/home');
// });

Route::get('/home', 'ControllerHome@home');
Route::get('/nasabah/listnasabah', 'ControllerDataNasabah@requestDaftarDataNasabah');
//Route::get('/belajar/html', 'BelajarController@getPage');

