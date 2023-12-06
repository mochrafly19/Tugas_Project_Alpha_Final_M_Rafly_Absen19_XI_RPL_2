<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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
});
Route::get('/profile-pplg', function () {
    return view('profile-pplg');
});
Route::get('/cv', function () {
    return view('cv');
});

// Menampilkan daftar siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');

// Menampilkan formulir untuk membuat siswa baru
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswacreate');

// Menyimpan siswa baru ke database
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');

// Menampilkan detail siswa
Route::get('/siswa/{siswa}', [SiswaController::class, 'show'])->name('siswashow');

// Menampilkan formulir untuk mengedit siswa
Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswaedit');

// Menyimpan pembaruan siswa ke database
Route::put('/siswa/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');

// Menghapus siswa dari database
Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

