<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LichSuGiaoDichController extends Controller
{
    public function index()
    {
        // Lấy dữ liệu từ view 'lich_su_giao_dich'
        $lichSuGiaoDich = DB::table('ve_xem_phim')->get();

        // Trả về view cùng với dữ liệu
        return view('lich_su_giao_dich.index', compact('lichSuGiaoDich'));
    }
}
