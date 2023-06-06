<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiAnggotaController;
use App\Http\Controllers\PeminjamanBukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarBukuController;
use App\Http\Controllers\DaftarAnggotaController;
use App\Http\Controllers\FormBukuController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return '<h1>Assalamualaikum Sobat, Selamat Belajar Laravel</h1>';
});

Route::get('/kabar', function () {
    return view('kondisi');
   });

   Route::get('/nilai', function () {
    return view('nilai');
   });

   Route::get('/tes_kesehatan', function () {
    return view('tes_kesehatan');
   });

   //Praktikum 9
   Route::get('/form-registrasi-anggota', 
   [RegistrasiAnggotaController::class, 'index']);

   Route::post('/hasil_regist', 
   [RegistrasiAnggotaController::class, 'hasil']);

   Route::get('/form-peminjaman-buku', 
   [PeminjamanBukuController::class, 'index']);

   Route::post('/hasil_peminjaman', 
   [PeminjamanBukuController::class, 'hasil']);

   //Praktikum 10
   Route::get('/dashboard', 
   [DashboardController::class, 'index']);

   Route::get('book/daftar_buku', 
   [DaftarBukuController::class, 'index']);

   Route::get('member/daftar_anggota', 
   [DaftarAnggotaController::class, 'index']);

   //Praktikum 12
   Route::get('book/create', 
   [DaftarBukuController::class, 'create']);

   Route::post('book/store', 
   [DaftarBukuController::class, 'store']);

   Route::delete('book/destroy/{id}', 
   [DaftarBukuController::class, 'destroy']);

   Route::get('member/create', 
   [DaftarAnggotaController::class, 'create']);

   Route::post('member/store', 
   [DaftarAnggotaController::class, 'store']);

   Route::delete('member/destroy/{id}', 
   [DaftarAnggotaController::class, 'destroy']);



