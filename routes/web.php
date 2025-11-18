<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Halaman Utama
|--------------------------------------------------------------------------
*/
Route::get('/', [AntrianController::class, 'index'])->name('home.index');

/*
|--------------------------------------------------------------------------
| Login & Logout
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Pendaftaran Antrian (HARUS LOGIN)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/daftar', [AntrianController::class, 'create'])->name('home.create');
    Route::post('/daftar', [AntrianController::class, 'store'])->name('home.store');
});

/*
|--------------------------------------------------------------------------
| Halaman Sukses (TIDAK perlu login)
|--------------------------------------------------------------------------
*/
Route::get('/daftar/sukses/{id}', [AntrianController::class, 'sukses'])
    ->name('daftar.sukses');


Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
