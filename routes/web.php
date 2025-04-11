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
Route::get('/', 'App\Http\Controllers\AdminController@qlyphim');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
/*Route::get('/xemlichchieu','App\Http\Controllers\QLLC\LichChieuController@xemlichchieu');*/
Route::get('/lichChieu', [LichChieuController::class, 'lichChieu'])->name('lichChieu');
Route::post('/lichchieudelete', [LichChieuController::class, 'lichchieudelete'])->name('lichchieudelete');
Route::get('/lichchieuedit/{maLichChieuPhim}', [LichChieuController::class, 'lichchieuedit'])->name('lichchieuedit');
Route::post('/saveedit', [LichChieuController::class, 'saveedit'])->name('saveedit');

Route::get('/themlichchieu', [LichChieuController::class, 'themlichchieu'])->name('themlichchieu');
Route::post('/them', [LichChieuController::class, 'them'])->name('them');

Route::get('/qlyphim','App\Http\Controllers\AdminController@qlyphim')
//->middleware('auth')
->name("qlyphim");
Route::post('/xoaphim','App\Http\Controllers\AdminController@xoaphim')
//->middleware('auth')
->name("xoaphim");
Route::get('/themphim','App\Http\Controllers\AdminController@themphim')
//->middleware('auth')
->name("themphim");
Route::post('/addmovie','App\Http\Controllers\AdminController@addmovie')
//->middleware('auth')
->name("addmovie");
Route::get('/suaphim/{id}','App\Http\Controllers\AdminController@suaphim')
//->middleware('auth')
->name("suaphim");
Route::post('/editmovie','App\Http\Controllers\AdminController@editmovie')
//->middleware('auth')
->name("editmovie");
require __DIR__.'/auth.php';

Route::get('/qlynhanvien','App\Http\Controllers\NhanvienController@qlynhanvien')
/*->middleware('auth')*/->name("qlynhanvien");
Route::post('/xoanhanvien','App\Http\Controllers\NhanvienController@xoanhanvien')
/*->middleware('auth')*/->name("xoanhanvien");
Route::get('/chitietnhanvien','App\Http\Controllers\NhanvienController@chitietnhanvien')
/*->middleware('auth')*/->name("chitietnhanvien");


// them/capnhat nhân viên
Route::get('/themnhanvien','App\Http\Controllers\NhanvienController@themnhanvien')
/*->middleware('auth')*/->name("themnhanvien");
Route::get('/suanhanvien/{maNV}','App\Http\Controllers\NhanvienController@suanhanvien')
/*->middleware('auth')*/->name("suanhanvien");

Route::post('/nhanvien/save/{action}','App\Http\Controllers\NhanvienController@nhanviensave'
)/*->middleware('auth')*/->name("nhanviensave");
