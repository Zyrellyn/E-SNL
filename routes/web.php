<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;
use App\Http\Controllers\AsuCONTROLLER;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\TambahController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TambahanggotaController;
use App\Http\Controllers\HomeController;

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
// routes/web.php


Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    // ROUTES ADMIN
    // Index | ADMIN
    Route::get('/home', [DashController::class, 'index']);
    // BUKU | ADMIN
    Route::get('/view/{id}', [BukuController::class, 'detail']);
    Route::get('/master', [BukuController::class, 'index']);
    Route::get('/buku1', [BukuController::class, 'create']);
    Route::post('/buku1/store', [BukuController::class, 'store']);
    Route::get('/deletebuku/{id}', [BukuController::class, 'delete']);
    Route::get('/editbuku/{id}', [BukuController::class, 'edit']);
    Route::post('/editbuku/{id}/store', [BukuController::class, 'update']);
    // Anggota | ADMIN
    Route::get('/anggota', [TambahanggotaController::class, 'index']);
    Route::get('/tambahan', [TambahanggotaController::class, 'tambahan']);
    Route::post('/tambahan/store', [TambahanggotaController::class, 'store']);
    Route::get('/edit/{id}', [TambahanggotaController::class, 'edit']);
    Route::post('/edit/{id}/store', [TambahanggotaController::class, 'update']);
    Route::get('/delete/{id}', [TambahanggotaController::class, 'delete']);
    // Kembali | ADMIN
    Route::get('/verifikasi', [VerifController::class, 'index']);
    Route::get('/verifikasi/{id}', [VerifController::class, 'return']);
    // History | ADMIN
    // Route::get('/history', [HistoryController::
    // Trash | ADMIN
    Route::get('/trash', [BukuController::class, 'trash']);
    Route::get('/restore/{id}', [BukuController::class, 'restore']);
    // Search | ADMIN
    Route::post('/search', [BukuController::class, 'search'])->name('search');
    // Backup | ADMIN
    Route::get('/backups', [BackupController::class, 'backup']);


    // ROUTES USER
    // index | USER
    Route::get('/user', [UserController::class, 'index']);
    // Peminjaman | USER
    Route::get('/pinjam', [UserController::class, 'view']);
    Route::get('/viewpinjam/{id}', [UserController::class, 'detail']);
    Route::get('/transaksi/{id}', [TransaksiController::class, 'show']);
    Route::post('/transaksi/store', [TransaksiController::class, 'store']);
    Route::get('/riwayatuser', [TransaksiController::class, 'return']);
    Route::get('/kembali', [TransaksiController::class, 'viewkembali']);
    Route::get('/kembali/{id}', [TransaksiController::class, 'kembalikan']);
});

Auth::routes();
