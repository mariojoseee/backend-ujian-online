<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AngkatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelazController;
use App\Http\Controllers\MapelController;
use Illuminate\Auth\Events\Login;

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

// --- ROUTE ADMIN BACKEND UJIAN ONLINE --- //

// Login Admin dan Guru
Route::get('/login-admin-ujian-online', [AdminLoginController::class, 'index'])->name('login-admin');
Route::post('/postlogin', [AdminLoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');

// FITUR UNTUK ADMIN DAN GURU (Keduanya bisa mengakses dashboard)
Route::group(['middleware' => ['auth:admin,guru', 'ceklevel:admin,guru']], function () {
  // Dashboard
  Route::get('/', [DashboardController::class, 'index']);
});

// FITUR KHUSUS ADMIN
Route::group(['middleware' => ['auth:admin', 'ceklevel:admin']], function () {
  // Data Admin yang Terdafar
  Route::get('/admin-smansabar', [AdminController::class, 'index']);
  // Route Guru
  Route::resource('/guru-smansabar', GuruController::class);
  // Route Kelas
  Route::resource('/kelaz', KelazController::class);
  // Route Angkatan
  Route::resource('/angkatan', AngkatanController::class);
  // Route Jurusan
  Route::resource('/jurusan', JurusanController::class);
  // Route Mata Pelajaran
  Route::resource('/mapel', MapelController::class);
});

// Fitur Khusus Guru
// Route::group(['middleware' => ['auth:guru', 'ceklevel:guru']], function () {

// });