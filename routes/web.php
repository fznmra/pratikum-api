<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\AuthController;
use App\Models\Fakultas;
use App\Models\Prodi;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard.index');

//Fakultas
Route::get('/fakultas', [FakultasController::class, 'index'])->middleware('auth')->name('fakultas.index');
Route::get('/fakultas/create', [FakultasController::class, 'create'])->middleware('auth')->name('fakultas.create');
Route::post('/fakultas/store', [FakultasController::class, 'store'])->middleware('auth')->name('fakultas.store');
Route::get('/fakultas/edit/{id}', [FakultasController::class, 'edit'])->middleware('auth')->name('fakultas.edit');
Route::post('/fakultas/update/{id}', [FakultasController::class, 'update'])->middleware('auth')->name('fakultas.update');
Route::get('/fakultas/hapus/{id}', [FakultasController::class, 'destroy'])->middleware('auth')->name('fakultas.hapus');




//Prodi
Route::get('/prodi', [ProdiController::class, 'index'])->middleware('auth')->name('prodi.index');
Route::get('/prodi/create', [ProdiController::class, 'create'])->middleware('auth')->name('prodi.create');
Route::post('/prodi/store', [ProdiController::class, 'store'])->middleware('auth')->name('prodi.store');
Route::get('/prodi/edit/{id}', [ProdiController::class, 'edit'])->middleware('auth')->name('prodi.edit');
Route::post('/prodi/update/{id}', [ProdiController::class, 'update'])->middleware('auth')->name('prodi.update');
Route::get('/prodi/delete/{id}', [ProdiController::class, 'destroy'])->middleware('auth')->name('prodi.delete');




Route::get('/profile', function () {
    return view('profile');
});
Route::get('/data', function () {
    return view('data');
});

Route::get('/register', [AuthController::class,'formRegister'])->name('register');
Route::post('/post-register', [AuthController::class,'post'])->name('post');

Route::get('/login', [AuthController::class,'formLogin'])->name('login');
Route::post('/post-login', [AuthController::class,'login'])->name('post.login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');