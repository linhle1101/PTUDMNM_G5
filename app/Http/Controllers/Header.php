<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeaderController extends Controller
{
    public function show()
    {
        // Lấy dữ liệu phim từ CSDL chính
        $phim = DB::table('phim')->get();

        // Lấy dữ liệu icon_menu từ CSDL phụ "lelin"
        $icon_menu = DB::connection('cgv')->table('icon_menu')->get();
        var_dump($icon_menu);
        die();

        // Cấu hình menu dropdown
        

        // Trả về view header và gửi dữ liệu ra view
        return view('partials.header', compact('phim', 'icon_menu', 'menu_items'));
    }
}