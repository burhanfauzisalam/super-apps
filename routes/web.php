<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\WalimuridController;
use App\Http\Controllers\KaryawanController;

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/masters/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/masters/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/masters/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/masters/walimurid', [WalimuridController::class, 'index'])->name('walimurid.index');
Route::get('/masters/karyawan', [KaryawanController::class, 'index'])->name('masters.karyawan.index');


