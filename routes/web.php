<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UndanganController;
use App\Http\Controllers\RapatController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\NotulensiController;

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

Route::redirect('/', '/auth');

// Autentikasi
Route::resource('/auth', AutentikasiController::class);
Route::post('/register', [AutentikasiController::class, 'register'])->name('register');
Route::get('/logout-page', [AutentikasiController::class, 'logoutPage'])->name('logout-page');

Route::group(['middleware' => 'login'], function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/rapat', RapatController::class);
    Route::resource('/undangan', UndanganController::class);
    Route::resource('/absensi', AbsenController::class);
    Route::resource('/karyawan', KaryawanController::class);
    Route::resource('/materi', MateriController::class);
    Route::resource('/notulensi', NotulensiController::class);
    Route::get('/logout', [AutentikasiController::class, 'logout'])->name('logout');
    Route::get('/profile', [AutentikasiController::class, 'uindex']);
    Route::get('/send_mail', [UndanganController::class, 'sendEmail'])->name('send_mail');
});
