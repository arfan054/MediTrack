<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;

// Halaman utama (daftar antrian)
Route::get('/', [AntrianController::class, 'index'])->name('home.index');

// Halaman form pendaftaran
Route::get('/daftar', [AntrianController::class, 'create'])->name('home.create');

// Proses penyimpanan data pendaftaran
Route::post('/daftar', [AntrianController::class, 'store'])->name('home.store');
