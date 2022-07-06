<?php

use App\Http\Controllers\AngkatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelazController;

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

Route::get('/', [DashboardController::class, 'index']);

// Route Angkatan
Route::resource('/angkatan', AngkatanController::class);
// Route Jurusan
Route::resource('/jurusan', JurusanController::class);
// Route Kelas
Route::resource('/kelaz', KelazController::class);