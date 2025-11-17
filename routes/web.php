<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;

// Halaman utama (daftar antrian)
Route::get('/', [AntrianController::class, 'index'])->name('home.index');

// Hanya user login yang boleh daftar
Route::middleware('auth')->group(function () {
    Route::get('/daftar', [AntrianController::class, 'create'])->name('home.create');
    Route::post('/daftar', [AntrianController::class, 'store'])->name('home.store');
});

// Halaman sukses — tidak perlu login
Route::get('/daftar/sukses/{id}', [AntrianController::class, 'sukses'])->name('daftar.sukses');
