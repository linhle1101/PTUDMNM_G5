<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuKien;
use App\Models\Phim;
use App\Models\IconMenu;

class CGVController extends Controller
{
    // Phương thức để trả về view Thanhvien
    public function Thanhvien()
    {
        return view('layouts.Thanhvien');
    }
    
}
