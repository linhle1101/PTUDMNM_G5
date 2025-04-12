<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CGVController;
use App\Http\Controllers\DatVeController;
use App\Http\Controllers\HeaderController; 
use App\Http\Controllers\HomeController;
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
use App\Http\Controllers\LichSuGiaoDichController;
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/lich-su-giao-dich', [LichSuGiaoDichController::class, 'index'])->name('lich-su-giao-dich.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/Thanhvien','App\Http\Controllers\CGVController@Thanhvien');
Route::get('/accountpanel','App\Http\Controllers\AccountController@accountpanel')->middleware('auth')->name("account");
Route::post('/saveaccountinfo','App\Http\Controllers\AccountController@saveaccountinfo')->middleware('auth')->name('saveinfo');

Route::get('/header-footer', [CGVController::class, 'headerfooter'])->name('headerfooter');
Route::get('/history', [LichSuGiaoDichController::class, 'index'])->name('transaction.history');

Route::get('/muave', [HomeController::class, 'muave'])->name('muave');
Route::post('/muave/ajax', [HomeController::class, 'muaveAjax'])->name('muave.ajax');
Route::post('/datve/luu', [DatVeController::class, 'luuVe'])->name('datve.luu');
