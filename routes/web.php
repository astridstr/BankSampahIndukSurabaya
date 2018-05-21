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
Route::get('/transaksi-tambah', 'TransaksiController@getFormTambahTransaksi');
Route::post('/transaksi-tambah', 'TransaksiController@setFormTambahTransaksi');
Route::get('/transaksi-edit/{id_transaksi}', 'TransaksiController@editFormTambahTransaksi');
Route::post('/transaksi-update/{id_transaksi}', 'TransaksiController@updateFormTambahTransaksi');
Route::get('/transaksi-delete/{id_transaksi}', 'TransaksiController@deleteTransaksi');

// Menu Nasabah
Route::get('/nasabah', 'NasabahController@index');
Route::get('/nasabah-kolektif', 'NasabahController@indexkolektif');
Route::get('/nasabah-tambah', 'NasabahController@getFormTambahNasabah');
Route::post('/nasabah-tambah', 'NasabahController@setFormTambahNasabah');
Route::get('/nasabah-edit/{no_rekening}', 'NasabahController@editFormTambahNasabah');
Route::post('/nasabah-update/{no_rekening}', 'NasabahController@updateFormTambahNasabah');
Route::get('/nasabah-delete/{no_rekening}', 'NasabahController@deleteNasabah');

// Menu Sampah
Route::get('/datasampah', 'SampahController@index');
Route::get('/datasampah-tambah', 'SampahController@getFormTambahDataSampah');
Route::post('/datasampah-tambah', 'SampahController@setFormTambahDataSampah');
Route::get('/datasampah-edit/{id_sampah}', 'SampahController@editFormTambahDataSampah');
Route::post('/datasampah-update/{id_sampah}', 'SampahController@updateFormTambahDataSampah');
Route::get('/datasampah-delete/{id_sampah}', 'SampahController@deleteDataSampah');
// Menu Rapot
Route::get('/rapotnasabah', 'RapotController@index');
Route::get('/rapotnasabah-pertahun', 'RapotController@indexpertahun');
Route::get('/rapotnasabah-perwilayah', 'RapotController@indexperwilayah');
//Menu Buku Tabungan
Route::get('/bukutabungan', 'TabunganController@index');
Route::post('/bukutabungan-cari', 'TabunganController@cari');
Route::get('/bukutabungan/notfound', 'TabunganController@error');

// Export PDF
Route::get('generate-pdf', 'PdfGenerateController@pdfview')->name('generate-pdf');

Route::get('/home', 'ControllerHome@home');
Route::get('/nasabah/listnasabah', 'ControllerDataNasabah@requestDaftarDataNasabah');

