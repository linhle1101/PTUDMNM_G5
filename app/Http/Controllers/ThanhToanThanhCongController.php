<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThanhToanThanhCongController extends Controller
{
    public function index(Request $request)
    {
        // Lấy thông tin khách hàng
        $user = Auth::user();
        $khach_hang = DB::table('khachhang')->latest('maKH')->first();

        // Lấy thông tin phim 
        $movies = DB::table('ve_xem_phim')->latest('ma_ve')->first();
        // Lấy giá vé từ bảng ve_xem_phim 
        $movies = DB::table('ve_xem_phim')->latest('gia_ve')->first();
        $tong_tien_ve = $movie ? $movie->gia_ve : 0;

        return view('payment.thanh_toan_thanh_cong', [
            'khach_hang' => (array) $khach_hang,
            'movies' =>$movies,
            'user' => $user,
            'movie' => (array) $movie,
            'tong_tien_ve' => $tong_tien_ve
        ]);
    }
}
