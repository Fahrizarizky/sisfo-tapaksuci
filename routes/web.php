<?php

use App\Http\Controllers\CabangLatihanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeanggotaanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KetingkatanController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\SuratController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);

Route::get('dashboard/ketingkatan', [KetingkatanController::class, 'index']);
Route::post('dashboard/ketingkatan/store', [KetingkatanController::class, 'storeKetingkatan']);
Route::put('dashboard/ketingkatan/update/{id}', [KetingkatanController::class, 'updateKetingkatan']);
Route::delete('dashboard/ketingkatan/delete/{id}', [KetingkatanController::class, 'deleteKetingkatan']);

Route::get('dashboard/keanggotaan', [KeanggotaanController::class, 'index']);

Route::get('dashboard/cabanglatihan', [CabangLatihanController::class, 'index']);
Route::get('dashboard/kegiatan', [KegiatanController::class, 'index']);
Route::get('dashboard/keuangan', [KeuanganController::class, 'index']);
Route::get('dashboard/surat', [SuratController::class, 'index']);
