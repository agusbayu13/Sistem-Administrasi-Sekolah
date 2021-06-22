<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\AboutController;

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

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => ['auth', 'ceklevel:Admin,Guru,Karyawan,Siswa']], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
});

Route::group(['middleware' => ['auth', 'ceklevel:Admin']], function () {
    Route::get('/data-guru', 'App\Http\Controllers\GuruController@index')->name('data-guru');
    Route::get('/input-guru', 'App\Http\Controllers\GuruController@create')->name('input-guru');
    Route::post('/simpan-guru', 'App\Http\Controllers\GuruController@store')->name('simpan-guru');
    Route::get('/edit-guru/{nip}', 'App\Http\Controllers\GuruController@edit')->name('edit-guru');
    Route::post('/update-guru/{nip}', 'App\Http\Controllers\GuruController@update')->name('update-guru');
    Route::get('/delete-guru/{nip}', 'App\Http\Controllers\GuruController@destroy')->name('delete-guru');
    Route::get('/data-karyawan', 'App\Http\Controllers\KaryawanController@index')->name('data-karyawan');
    Route::get('/input-karyawan', 'App\Http\Controllers\KaryawanController@create')->name('input-karyawan');
    Route::post('/simpan-karyawan', 'App\Http\Controllers\KaryawanController@store')->name('simpan-karyawan');
    Route::get('/edit-karyawan/{nip}', 'App\Http\Controllers\KaryawanController@edit')->name('edit-karyawan');
    Route::post('/update-karyawan/{nip}', 'App\Http\Controllers\KaryawanController@update')->name('update-karyawan');
    Route::get('/delete-karyawan/{nip}', 'App\Http\Controllers\KaryawanController@destroy')->name('delete-karyawan');
    Route::get('/data-siswa', 'App\Http\Controllers\SiswaController@index')->name('data-siswa');
    Route::get('/input-siswa', 'App\Http\Controllers\SiswaController@create')->name('input-siswa');
    Route::post('/simpan-siswa', 'App\Http\Controllers\SiswaController@store')->name('simpan-siswa');
    Route::get('/edit-siswa/{nis}', 'App\Http\Controllers\SiswaController@edit')->name('edit-siswa');
    Route::post('/update-siswa/{nis}', 'App\Http\Controllers\SiswaController@update')->name('update-siswa');
    Route::get('/delete-siswa/{nis}', 'App\Http\Controllers\SiswaController@destroy')->name('delete-siswa');
    Route::get('/tagihan-pembayaran', 'App\Http\Controllers\PembayaranController@index')->name('tagihan-pembayaran');
    Route::get('/semua-tagihan-pembayaran', 'App\Http\Controllers\PembayaranController@indexsemua')->name('semua-tagihan-pembayaran');
    Route::get('/input-pembayaran', 'App\Http\Controllers\PembayaranController@create')->name('input-pembayaran');
    Route::post('/simpan-pembayaran', 'App\Http\Controllers\PembayaranController@store')->name('simpan-pembayaran');
    Route::get('/edit-pembayaran/{id}', 'App\Http\Controllers\PembayaranController@edit')->name('edit-pembayaran');
    Route::post('/update-pembayaran/{id}', 'App\Http\Controllers\PembayaranController@update')->name('update-pembayaran');
    Route::get('/delete-pembayaran/{id}', 'App\Http\Controllers\PembayaranController@destroy')->name('delete-pembayaran');
    Route::get('/tagihan', 'App\Http\Controllers\PembayaranController@IndexTagihan')->name('tagihan');
});

Route::group(['middleware' => ['auth', 'ceklevel:Admin,Guru,Karyawan']], function () {
    Route::post('/simpan-masuk', 'App\Http\Controllers\PresensiController@store')->name('simpan-masuk');
    Route::get('presensi-masuk', 'App\Http\Controllers\PresensiController@index')->name('presensi-masuk');
    Route::get('presensi-keluar', 'App\Http\Controllers\PresensiController@keluar')->name('presensi-keluar');
    Route::post('ubah-presensi', 'App\Http\Controllers\PresensiController@presensipulang')->name('ubah-presensi');
    Route::get('filter-data', 'App\Http\Controllers\PresensiController@halamanrekap')->name('filter-data');
    Route::get('filter-data/{tglawal}/{tglakhir}', 'App\Http\Controllers\PresensiController@tampildatakeseluruhan')->name('filter-data-keseluruhan');
});

Route::group(['middleware' => ['auth', 'ceklevel:Admin,Siswa']], function () {
    Route::get('/tagihan-pembayaran', 'App\Http\Controllers\PembayaranController@index')->name('tagihan-pembayaran');
    Route::get('/input-pembayaran', 'App\Http\Controllers\PembayaranController@create')->name('input-pembayaran');
    Route::post('/simpan-pembayaran', 'App\Http\Controllers\PembayaranController@store')->name('simpan-pembayaran');
    Route::get('/tagihan', 'App\Http\Controllers\PembayaranController@IndexTagihan')->name('tagihan');
});
