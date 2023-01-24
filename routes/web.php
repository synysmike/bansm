<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SekolahController;
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

Route::get('/login', [AuthController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class,'authenticate'])->name('authenticate');
Route::get('/', [HomeController::class, 'index']);
Route::get('tes', function(){
    return view('admin.modal');
});
// Route::get('sekolah', [SekolahController::class, 'index']);
// Route::get('sekolah/{id}', [SekolahController::class, 'show']);
Route::middleware(['auth', 'role:sekolah'])->group(function () {
    Route::resource('/detilsekolah', DetilSekolahController::class);
});
Route::middleware(['auth', 'role:kpa|admin'])->group(function () {
    Route::post('/logout', [AuthController::class,'logout']);
    Route::resource('sekolah', SekolahController::class);
});