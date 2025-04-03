<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QLLC\LichChieuController;
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
    return view('qlyacc');
});


/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';*/
/*Route::get('/xemlichchieu','App\Http\Controllers\QLLC\LichChieuController@xemlichchieu');*/
Route::get('/lichChieu', [LichChieuController::class, 'lichChieu'])->name('lichChieu');
Route::post('/lichchieudelete', [LichChieuController::class, 'lichchieudelete'])->name('lichchieudelete');
Route::get('/lichchieuedit/{maLichChieuPhim}', [LichChieuController::class, 'lichchieuedit'])->name('lichchieuedit');
Route::post('/saveedit', [LichChieuController::class, 'saveedit'])->name('saveedit');

Route::get('/themlichchieu', [LichChieuController::class, 'themlichchieu'])->name('themlichchieu');
Route::post('/them', [LichChieuController::class, 'them'])->name('them');