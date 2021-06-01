<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PembayaranController;
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

Route::group(['middleware' => 'auth'], function () {

    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::post('/simpan-masuk', [PresensiController::class, 'store'])->name('simpan-masuk');
Route::get('presensi-masuk', [PresensiController::class, 'index'])->name('presensi-masuk');
Route::get('presensi-keluar', [PresensiController::class, 'keluar'])->name('presensi-keluar');
Route::post('ubah-presensi', [PresensiController::class, 'presensipulang'])->name('ubah-presensi');
Route::get('filter-data', [PresensiController::class, 'halamanrekap'])->name('filter-data');
Route::get('filter-data/{tglawal}/{tglakhir}', [PresensiController::class, 'tampildatakeseluruhan'])->name('filter-data-keseluruhan');
Route::get('/data-guru', 'App\Http\Controllers\GuruController@index')->name('data-guru');
Route::get('/input-guru', 'App\Http\Controllers\GuruController@create')->name('input-guru');
Route::post('/simpan-guru', 'App\Http\Controllers\GuruController@store')->name('simpan-guru');
Route::get('/edit-guru/{id}', 'App\Http\Controllers\GuruController@edit')->name('edit-guru');
Route::post('/update-guru/{id}', 'App\Http\Controllers\GuruController@update')->name('update-guru');
Route::get('/delete-guru/{id}', 'App\Http\Controllers\GuruController@destroy')->name('delete-guru');

Route::get('/data-karyawan', 'App\Http\Controllers\karyawanController@index')->name('data-karyawan');
Route::get('/input-karyawan', 'App\Http\Controllers\karyawanController@create')->name('input-karyawan');
Route::post('/simpan-karyawan', 'App\Http\Controllers\karyawanController@store')->name('simpan-karyawan');
Route::get('/edit-karyawan/{id}', 'App\Http\Controllers\KaryawanController@edit')->name('edit-karyawan');
Route::post('/update-karyawan/{id}', 'App\Http\Controllers\karyawanController@update')->name('update-karyawan');
Route::get('/delete-karyawan/{id}', 'App\Http\Controllers\KaryawanController@destroy')->name('delete-karyawan');

Route::get('/input-pembayaran', 'App\Http\Controllers\PembayaranController@index', 'App\Http\Controllers\PembayaranController@create')->name('input-pembayaran');

Route::post('/simpan-pembayaran', 'App\Http\Controllers\PembayaranController@store')->name('simpan-pembayaran');

Route::get('/about', function () {
    return view('About');
});

Route::get('/tagihan', function () {
    return view('tagihan');
});

Route::get('/presensi', function () {
    return view('presensi');
});

Route::get('/data-siswa', function () {
    return view('siswa.data-siswa');
});
