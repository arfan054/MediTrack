
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;

Route::get('/', [AntrianController::class, 'index'])->name('home.index');
Route::get('/daftar', [AntrianController::class, 'create'])->name('home.create');
Route::post('/daftar', [AntrianController::class, 'store'])->name('home.store');
