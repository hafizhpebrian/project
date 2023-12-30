<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\SiswaController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

Route::resource('siswa',SiswaController::class);
Route::resource('pendaftaran',PendaftaranController::class);
Route::resource('guru',GuruController::class);
Route::resource('pelajaran',PelajaranController::class);
Route::resource('kategori',KategoriController::class);