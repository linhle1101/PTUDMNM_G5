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
use App\Http\Controllers\QLLC\LichChieuController;
use App\Http\Controllers\CGVController;
use App\Http\Controllers\DatVeController;
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

Route::get('/thanh_toan_thanh_cong', [ThanhToanThanhCongController::class, 'index']);
Route::post('/thanh_toan_thanh_cong', [ThanhToanThanhCongController::class, 'index'])->name('thanh_toan_thanh_cong');
Route::get('/testemail','App\Http\Controllers\ViduController@testemail');
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
Route::get('/Thanhvien','App\Http\Controllers\CGVController@Thanhvien');
Route::get('/accountpanel','App\Http\Controllers\AccountController@accountpanel')->middleware('auth')->name("account");
Route::post('/saveaccountinfo','App\Http\Controllers\AccountController@saveaccountinfo')->middleware('auth')->name('saveinfo');

Route::get('/header-footer', [CGVController::class, 'headerfooter'])->name('headerfooter');
Route::get('/history', [LichSuGiaoDichController::class, 'index'])->name('transaction.history');

Route::get('/muave', [HomeController::class, 'muave'])->name('muave');
Route::post('/muave/ajax', [HomeController::class, 'muaveAjax'])->name('muave.ajax');
Route::post('/datve/luu', [DatVeController::class, 'luuVe'])->name('datve.luu');
