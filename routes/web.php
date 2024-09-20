<?php

use App\Http\Controllers\DasborController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PenggunaController;
use App\Http\Middleware\CheckAktifPengguna;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // return view('welcome');
    if (!session()->has('aktifPengguna')) {
        return redirect("login");
    }
});

Route::get('logout', function () {
    if (session()->has('aktifPengguna')) {
        session()->remove('aktifPengguna');
    }
    return redirect('/login');
});

Route::any('account-setting', [DasborController::class, 'accountSetting']);

Route::get("login", [LoginController::class, 'index']);
Route::post("login", [LoginController::class, 'index']);
Route::get("dasbor", [DasborController::class, 'index'])->middleware(CheckAktifPengguna::class);

Route::group(['prefix' => 'admin/pengguna', 'middleware' => CheckAktifPengguna::class], function () {
    Route::get('/', [PenggunaController::class, 'index']);
    Route::get('/tambah-pengguna', [PenggunaController::class, 'tambahPengguna']);
    Route::post('/tambah-pengguna', [PenggunaController::class, 'tambahPengguna']);
    Route::delete('/hapus-pengguna/{id}', [PenggunaController::class, 'hapusPengguna']);
    Route::get('/lihat-pengguna/{id}', [PenggunaController::class, 'lihatPengguna']);
    Route::patch('/lihat-pengguna/{id}', [PenggunaController::class, 'lihatPengguna']);
});

Route::group(['prefix' => 'admin/pasien', 'middleware' => CheckAktifPengguna::class], function () {
    Route::get('/', [PasienController::class, 'index']);
    Route::get('/tambah-pasien', [PasienController::class, 'tambahPasien']);
    Route::post('/tambah-pasien', [PasienController::class, 'tambahPasien']);
    Route::delete('/hapus-pasien/{id}', [PasienController::class, 'hapusPasien']);
    Route::get('/lihat-pasien/{id}', [PasienController::class, 'lihatPasien']);
    Route::patch('/lihat-pasien/{id}', [PasienController::class, 'lihatPasien']);
});
