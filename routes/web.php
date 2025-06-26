<?php

use App\Models\Deviasi;
use App\Models\Dataumum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\InstrukturController;
use App\Http\Controllers\KodefikasiController;
use App\Http\Controllers\LaporKerjaController;
use App\Http\Controllers\LihatController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PenempatanController;
use App\Http\Controllers\PenyelenggaraController;
use App\Http\Controllers\RekapitulasiController;
use App\Http\Controllers\SuratController;

Route::get('/', [LoginController::class, 'welcome']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth', 'superadmin'])->group(function () {
    Route::get('/superadmin', [HomeController::class, 'superadmin']);
    Route::get('/superadmin/laporan', [LaporanController::class, 'index']);
    Route::get('/superadmin/laporan/pilih', [LaporanController::class, 'pilih']);

    Route::get('/superadmin/jenis', [JenisController::class, 'index']);
    Route::get('/superadmin/jenis/add', [JenisController::class, 'add']);
    Route::get('/superadmin/jenis/edit/{id}', [JenisController::class, 'edit']);
    Route::get('/superadmin/jenis/delete/{id}', [JenisController::class, 'delete']);
    Route::post('/superadmin/jenis/add', [JenisController::class, 'store']);
    Route::post('/superadmin/jenis/edit/{id}', [JenisController::class, 'update']);
    Route::get('/superadmin/jenis/print', [JenisController::class, 'print']);

    Route::get('/superadmin/pegawai', [PegawaiController::class, 'index']);
    Route::get('/superadmin/pegawai/add', [PegawaiController::class, 'add']);
    Route::get('/superadmin/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
    Route::get('/superadmin/pegawai/delete/{id}', [PegawaiController::class, 'delete']);
    Route::post('/superadmin/pegawai/add', [PegawaiController::class, 'store']);
    Route::post('/superadmin/pegawai/edit/{id}', [PegawaiController::class, 'update']);
    Route::get('/superadmin/pegawai/print', [PegawaiController::class, 'print']);

    Route::get('/superadmin/pegawai', [PegawaiController::class, 'index']);
    Route::get('/superadmin/pegawai/add', [PegawaiController::class, 'add']);
    Route::get('/superadmin/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
    Route::get('/superadmin/pegawai/delete/{id}', [PegawaiController::class, 'delete']);
    Route::post('/superadmin/pegawai/add', [PegawaiController::class, 'store']);
    Route::post('/superadmin/pegawai/edit/{id}', [PegawaiController::class, 'update']);
    Route::get('/superadmin/pegawai/print', [PegawaiController::class, 'print']);

    Route::get('/superadmin/penempatan', [PenempatanController::class, 'index']);
    Route::get('/superadmin/penempatan/add', [PenempatanController::class, 'add']);
    Route::get('/superadmin/penempatan/edit/{id}', [PenempatanController::class, 'edit']);
    Route::get('/superadmin/penempatan/delete/{id}', [PenempatanController::class, 'delete']);
    Route::post('/superadmin/penempatan/add', [PenempatanController::class, 'store']);
    Route::post('/superadmin/penempatan/edit/{id}', [PenempatanController::class, 'update']);
    Route::get('/superadmin/penempatan/print', [PenempatanController::class, 'print']);

    Route::get('/superadmin/surat', [SuratController::class, 'index']);
    Route::get('/superadmin/surat/add', [SuratController::class, 'add']);
    Route::get('/superadmin/surat/edit/{id}', [SuratController::class, 'edit']);
    Route::get('/superadmin/surat/delete/{id}', [SuratController::class, 'delete']);
    Route::post('/superadmin/surat/add', [SuratController::class, 'store']);
    Route::post('/superadmin/surat/edit/{id}', [SuratController::class, 'update']);
    Route::get('/superadmin/surat/print', [SuratController::class, 'print']);

    Route::get('/superadmin/lihat', [LihatController::class, 'index']);
    Route::post('/superadmin/lihat', [LihatController::class, 'lihat']);

    Route::get('/superadmin/rekapitulasi', [RekapitulasiController::class, 'index']);
    Route::get('/superadmin/rekapitulasi/kota', [RekapitulasiController::class, 'kota']);
    Route::get('/superadmin/rekapitulasi/cabang', [RekapitulasiController::class, 'cabang']);
    Route::get('/superadmin/rekapitulasi/nik', [RekapitulasiController::class, 'nik']);
});

Route::get('/logout', function () {
    Auth::logout();
    Session::flash('success', 'Anda Telah Logout');
    return redirect('/');
});
