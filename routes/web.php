<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [AuthController::class, 'showFormlogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormlogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormregister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});


Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tagihan', function () {
    return view('tagihan');
});

Route::get('/presensi', function () {
    return view('presensi');
});

Route::get('/data_guru', function () {
    return view('data_guru');
});
