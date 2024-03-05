<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
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

Route::get('/', [BukuController::class, 'welcome']);


Route::middleware('auth')->group(function () {
    //katetgori
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/kategori/tambah', [KategoriController::class,'create'])->name('kategori.create');
    Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/kategori/hapus/{id}',[KategoriController::class, 'hapus'])->name('kategori.hapus');
    Route::get('/kategori/edit/{id}',[KategoriController::class, 'edit'])->name('kategori.edit');
    Route::post('/kategori/update/{id}',[KategoriController::class, 'update'])->name('kategori.update');
    //buku
    Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
    Route::get('/buku/tambah', [BukuController::class, 'create'])->name('buku.create');
    Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');
    Route::get('/buku/hapus/{id}',[BukuController::class, 'hapus'])->name('buku.hapus');
    Route::get('/buku/edit/{id}',[BukuController::class, 'edit'])->name('buku.edit');
    Route::get('/buku/detail/{id}', [BukuController::class, 'show'])->name('buku.show');
    Route::put('/buku/update/{id}',[BukuController::class, 'update'])->name('buku.update');
   //peminjaman
    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::get('/peminjaman/tambah', [PeminjamanController::class, 'tambahPeminjaman'])->name('peminjaman.tambah');
    Route::post('/peminjaman/store', [PeminjamanController::class, 'storePeminjaman'])->name('peminjaman.store');
    Route::post('/peminjaman/selesai/{id}', [PeminjamanController::class, 'kembalikanBuku'])->name('peminjaman.kembalikan');
   //generate report
    Route::get('/report', [PeminjamanController::class, 'print'])->name('print');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();