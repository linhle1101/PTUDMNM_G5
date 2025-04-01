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
    return view('admin/qlyacc');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

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
