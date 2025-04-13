<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phim;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PhimdangchieuController extends Controller
{
    public function index() {
        // Kiểm tra user đăng nhập
        $user = Auth::user();
        if ($user) {
            \Log::info('Người dùng đăng nhập: ' . $user->name);
        } else {
            \Log::info('Không có người dùng nào đăng nhập');
        }

        // Lấy dữ liệu phim
        $phim_dang_chieu = DB::connection('lelin_cgv')->table('phim')->where('trangThai', 'hoat_dong')->get();
        


        // Ghi log dữ liệu để debug
        \Log::info('Dữ liệu phim:', $phim_dang_chieu->toArray());

        return view('phim_dang_chieu', compact('phim_dang_chieu'));
    }
} 