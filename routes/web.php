<?php

use App\Http\Controllers\CabangLatihanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeanggotaanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KetingkatanController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\SuratController;
use App\Models\Cabanglatihan;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingpageController::class, 'index']);
Route::get('/about', [LandingpageController::class, 'about']);
Route::get('/contact', [LandingpageController::class, 'contact']);
Route::get('/login', [LandingpageController::class, 'login']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('dashboard/ketingkatan', [KetingkatanController::class, 'index']);
Route::post('dashboard/ketingkatan/store', [KetingkatanController::class, 'storeKetingkatan']);
Route::get('dashboard/ketingkatan/edit/{id}', [KetingkatanController::class, 'editKetingkatan']);
Route::put('dashboard/ketingkatan/update/{id}', [KetingkatanController::class, 'updateKetingkatan']);
Route::delete('dashboard/ketingkatan/delete/{id}', [KetingkatanController::class, 'deleteKetingkatan']);

Route::get('dashboard/keanggotaan', [KeanggotaanController::class, 'index']);
Route::post('dashboard/keanggotaan/store', [KeanggotaanController::class, 'storeKeanggotaan']);
Route::get('dashboard/keanggotaan/edit/{id}', [KeanggotaanController::class, 'editKeanggotaan']);
Route::put('dashboard/keanggotaan/update/{id}', [KeanggotaanController::class, 'updateKeanggotaan']);
Route::get('dashboard/keanggotaan/show/{id}', [KeanggotaanController::class, 'showKeanggotaan']);
Route::delete('dashboard/keanggotaan/delete/{id}', [KeanggotaanController::class, 'deleteKeanggotaan']);

Route::get('dashboard/cabanglatihan', [CabangLatihanController::class, 'index']);
Route::post('dashboard/cabanglatihan/store', [CabangLatihanController::class, 'storeCabanglatihan']);
Route::get('dashboard/cabanglatihan/edit/{id}', [CabangLatihanController::class, 'editCabanglatihan']);
Route::put('dashboard/cabanglatihan/update/{id}', [CabangLatihanController::class, 'updateCabanglatihan']);
Route::delete('dashboard/cabanglatihan/delete/{id}', [CabangLatihanController::class, 'deleteCabanglatihan']);

Route::get('dashboard/cabanglatihan/admincabang', [CabangLatihanController::class, 'indexAdmincabang']);
Route::post('dashboard/cabanglatihan/admincabang/store', [CabangLatihanController::class, 'storeAdmincabang']);
Route::get('dashboard/cabanglatihan/admincabang/edit/{id}', [CabangLatihanController::class, 'editAdmincabang']);
Route::put('dashboard/cabanglatihan/admincabang/update/{id}', [CabangLatihanController::class, 'updateAdmincabang']);
Route::delete('dashboard/cabanglatihan/admincabang/delete/{id}', [CabangLatihanController::class, 'deleteAdmincabang']);

Route::get('dashboard/kegiatan', [KegiatanController::class, 'index']);
Route::get('dashboard/keuangan', [KeuanganController::class, 'index']);
Route::get('dashboard/surat', [SuratController::class, 'index']);
