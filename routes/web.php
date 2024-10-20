<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\RelawanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SupporterController;

Route::get('/show-points', [SupporterController::class, 'showPoints'])->name('show.points');
Route::post('/redeem-points', [SupporterController::class, 'redeemPoints'])->name('redeem.points');

Route::get('/supporter/jenis-misi', function () {
    return view('supporter.jenis_misi');
});
Route::get('/supporter/point', [SupporterController::class, 'showPoints']);
// Rute untuk menampilkan halaman output relawan
Route::get('/relawan/{id}', [RelawanController::class, 'show'])->name('relawan.show');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/supporter', [SupporterController::class, 'index'])->name('supporter.index');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware('auth')->get('/', function () {
    return view('home');
})->name('home');

Route::get('/relawan', [RelawanController::class, 'create'])->name('relawan.create');
Route::post('/relawan', [RelawanController::class, 'store'])->name('relawan.store');

Route::get('/donatur', [DonasiController::class, 'create'])->name('donatur.create');
Route::post('/donatur', [DonasiController::class, 'store'])->name('donatur.store');
Route::get('/donatur/daftar', [DonasiController::class, 'index'])->name('donatur.index');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/edukasi', function () {
    return view('edukasi');
});
Route::get('/donasi', function () {
    return view('donasi');
});
