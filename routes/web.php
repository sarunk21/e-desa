<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\User\ServiceController;

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

Route::get('/', function () {
    return view('welcome');
})->name('wellcome');

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginUser'])->name('login.user');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerUser'])->name('register.user');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// User
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboardUser'])->name('dashboard.user');

    // Antrian
    Route::get('/antrian', [ServiceController::class, 'antrian'])->name('antrian');
    Route::get('/antrian/{id}', [ServiceController::class, 'antrianDetail'])->name('antrian.detail');
    Route::post('/antrian', [ServiceController::class, 'antrianStore'])->name('antrian.store');

    // Pengajuan
    Route::get('/pengajuan', [ServiceController::class, 'pengajuan'])->name('pengajuan');
    Route::get('/pengajuan/{id}', [ServiceController::class, 'pengajuanDetail'])->name('pengajuan.detail');
    Route::post('/pengajuan', [ServiceController::class, 'pengajuanStore'])->name('pengajuan.store');
});

// Admin
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboardAdmin'])->name('dashboard.admin');
});
