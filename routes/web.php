<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KpaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\RakordaController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\DaftarhadirController;
use App\Http\Controllers\DetilSekolahController;

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
// Route::get('tes', function(){
//     return view('admin.modal');
// });
// Route::get('sekolah', [SekolahController::class, 'index']);
// Route::get('sekolah/{id}', [SekolahController::class, 'show']);




Route::get('/', [HomeController::class, 'index']);
Route::get('/total', [VerifikasiController::class, 'total']);
Route::get('/status', [DetilsekolahController::class, 'status']);
Route::post('/perbaikan', [DetilsekolahController::class, 'perbaikan']);
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');

Route::get('/loginbansm', [AuthController::class, 'login'])->name('login');
// Route::resource('/login', AuthController::class);
Route::post('/logout', [AuthController::class, 'logout']);

// public access
Route::get('/registrasi-kpa', [KpaController::class, 'index']);
Route::get('/configtable', [DaftarhadirController::class, 'config']);
Route::get('/kesanggupan', [DaftarhadirController::class, 'kesediaan']);
Route::post('/kesanggupan', [DaftarhadirController::class, 'postkesediaan']);
Route::post('/settable', [DaftarhadirController::class, 'set_config']);
Route::resource('kpa', KpaController::class);
Route::resource('/absen', AbsenController::class);
Route::resource('/ppdatahap1', DaftarhadirController::class);
Route::resource('/bukutamu', BukuTamuController::class);
Route::resource('/rakorda', RakordaController::class);


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('user', UserController::class);
});

Route::middleware(['auth', 'role:kpa'])->group(function () {
    Route::resource('verifikasi', VerifikasiController::class);
    Route::get('/admin', [SekolahController::class, 'admin']);
});

Route::middleware(['auth', 'role:sekolah'])->group(function () {
    Route::resource('/detilsekolah', DetilSekolahController::class);
});

Route::middleware(['auth', 'role:kpa|admin'])->group(function () {
    Route::resource('sekolah', SekolahController::class);
    Route::get('/bmps', [SekolahController::class, 'bmps']);
    Route::post('/bmps', [SekolahController::class, 'bmps']);
});
