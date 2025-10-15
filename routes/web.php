<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/mahasiswa/store', [DashboardController::class, 'store'])->name('mahasiswa.store');
