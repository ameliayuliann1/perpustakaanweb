<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PetugasController;

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
    return view('index');
});




//Route untuk Data Buku
Route::get('/buku', [BukuController::class, 'bukutampil']);
Route::post('/buku/tambah',[BukuController::class, 'bukutambah']); 
Route::get('/buku/hapus/{idbuku}',[BukuController::class, 'bukuhapus']);
Route::put('/buku/edit/{idbuku}', [BukuController::class, 'bukuedit']);

//Route untuk Data Siswa
Route::get('/siswa', [SiswaController::class, 'bukutampil']);

//Route untuk Data Petugas
Route::get('/petugas', [PetugasController::class, 'bukutampil']);

//Route untuk Data Peminjaman
Route::get('/peminjaman', [PeminjamanController::class, 'bukutampil']);

//crud peminjaman
Route::get('/pinjam', [PinjamController::class, 'pinjamtampil']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
