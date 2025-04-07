<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HeaderController; 
use App\Http\Controllers\PhimdangchieuController;
use App\Http\Controllers\PhimsapchieuController;

use App\Http\Controllers\ThanhToanController;
use App\Http\Controllers\QRController;
use App\Http\Controllers\ThanhToanThanhCongController;



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
    return view('welcome');
})->name("home");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Route đăng nhập

//Route::get('/login', [AuthenticatedSessionController::class, 'showLoginForm'])->name('login');
//Route::post('/login', [AuthenticatedSessionController::class, 'login']);
Route::get('/header', [HeaderController::class, 'show']);
Route::get('/phim_dang_chieu', [PhimdangchieuController::class, 'index']);

Route::get('/phim_sap_chieu', [PhimsapchieuController::class, 'index']);

Route::get('/thanh_toan', [ThanhToanController::class, 'index'])->name('thanh_toan');
Route::post('/thanh_toan/xu-ly', [ThanhToanController::class, 'handlePayment'])->name('thanh_toan.process');

Route::get('/qr', [QRController::class, 'index'])->name('qr');
Route::post('/qr/confirm', [QRController::class, 'confirmPayment'])->name('qr.confirm');

Route::post('/thanh_toan_thanh_cong', [ThanhToanThanhCongController::class, 'success'])->name('payment.success');
