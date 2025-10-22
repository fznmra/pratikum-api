<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/mahasiswa/create', [DashboardController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa/store', [DashboardController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/edit/{id}', [DashboardController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswa/update/{id}', [DashboardController::class, 'update'])->name('mahasiswa.update');
Route::get('/mahasiswa/delete/{id}', [DashboardController::class, 'destroy'])->name('mahasiswa.delete');
