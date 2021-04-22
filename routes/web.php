<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
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
