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
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SoalJawabanController;
use App\Http\Controllers\UjianController;
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
  // Route Admin
  Route::get('/admin-smansabar', [AdminController::class, 'index']);
  Route::get('/profile-admin', [AdminController::class, 'profileAdmin']);
  // Route Guru
  Route::resource('/guru-smansabar', GuruController::class);
  Route::get('/guru-smansabars/kelaz-mapel/{id}', [GuruController::class, 'kelazMapel']);
  // Route Siswa
  Route::resource('/siswa-smansabar', SiswaController::class);
  Route::get('/siswa-smansabars/pilih_kelaz', [SiswaController::class, 'pilih_kelaz']);
  // Route Kelas
  Route::resource('/kelaz', KelazController::class);
  // Route Angkatan
  Route::resource('/angkatan', AngkatanController::class);
  // Route Jurusan
  Route::resource('/jurusan', JurusanController::class);
  // Route Mata Pelajaran
  Route::resource('/mapel', MapelController::class);
});


// FITUR KHUSUS GURU
Route::group(['middleware' => ['auth:guru', 'ceklevel:guru']], function () {
  Route::get('/profile-guru', [GuruController::class, 'profileGuru']);
  // Route Ujian
  Route::resource('/ujian', UjianController::class);
  Route::put('/ujian/status-ujian/{id}', [UjianController::class, 'statusUjian']);
  // Route CRUD Soal Ujian
  Route::get('/ujian/soal-ujian/{id}', [SoalJawabanController::class, 'soalUjian']);
  Route::post('/ujian/soal-ujian', [SoalJawabanController::class, 'storeSoal']);
  Route::get('/ujian/soal-ujian/edit/{id}', [SoalJawabanController::class, 'editSoal']);
  Route::put('/ujian/soal-ujian/{id}', [SoalJawabanController::class, 'updateSoal']);
  Route::delete('/ujian/soal-ujian/{id}', [SoalJawabanController::class, 'destroySoal']);
  // Route CRUD Jawaban Ujian
  Route::get('/ujian/jawaban-ujian/{id}', [SoalJawabanController::class, 'jawabanUjian']);
  Route::post('/ujian/jawaban-ujian', [SoalJawabanController::class, 'storeJawaban']);
  Route::get('/ujian/jawaban-ujian/edit/{id}', [SoalJawabanController::class, 'editJawaban']);
  Route::put('/ujian/jawaban-ujian/{id}', [SoalJawabanController::class, 'updateJawaban']);
  Route::delete('/ujian/jawaban-ujian/{id}', [SoalJawabanController::class, 'destroyJawaban']);
});
