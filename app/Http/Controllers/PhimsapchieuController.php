<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phim;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class PhimsapchieuController extends Controller
{
    public function index(){
             // Kiểm tra user đăng nhập
             $user = Auth::user();
             if ($user) {
                 \Log::info('Người dùng đăng nhập: ' . $user->name);
             } else {
                 \Log::info('Không có người dùng nào đăng nhập');
             }

        // Lấy danh sách phim có trạng thái "chưa hoạt động"
        $phim_sap_chieu = DB::connection('lelin_cgv')->table('phim')
            ->where('trangThai', 'chua_hoat_dong')
            ->get();

        // Trả về view với danh sách phim
        return view('phim_sap_chieu', compact('phim_sap_chieu'));
    }
}