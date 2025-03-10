<?php

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
    return view('welcome');
});

Route::get('/vidu1', function () {
    return 'Xin chào';
});
Route::get('/vidu1','App\Http\Controllers\ViDuController@Linhle');

Route::get('/vidu2','App\Http\Controllers\ViduController@vidu2');

Route::post('/tinhtong','App\Http\Controllers\ViDuController@tinhtong');

Route::get('/baitap1','App\Http\Controllers\BaiTapController@baitap1');
Route::post('/themtheloai','App\Http\Controllers\BaiTapController@themtheloai');

Route::get('/baitap2','App\Http\Controllers\BaiTapController@baitap2');
Route::post('/themtheloai2','App\Http\Controllers\BaiTapController@themtheloai2');

Route::get('/layouts/trang1','App\Http\Controllers\ViduLayoutController@trang1');

Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');
Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');
Route::get('/sach/detail/{id}','App\Http\Controllers\ViduLayoutController@detail');


Route::get('/sach/detail/{id}','App\Http\Controllers\ViduLayoutController@detail');

Route::get('/ten','App\Http\Controllers\ViDuController@ten');


Route::get('/inten','App\Http\Controllers\ViduController@inten');
