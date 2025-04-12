<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ThanhToanThanhCongController extends Controller
{
    public function index(Request $request)
    {
        // Lấy thông tin khách hàng
        $user = Auth::user();
        $khach_hang = DB::table('khachhang')->latest('maKH')->first();

        // Lấy vé mới nhất
        $ve = DB::table('ve_xem_phim')->latest('ma_ve')->first();
        $lich_chieu = DB::table('lichchieuphim')->latest('maLichChieuPhim')->first();
        $phims =DB::table('phim')->latest('thoi_luong')->first();
        if (!$ve) {
            return redirect('/')->with('error', 'Không tìm thấy vé!');
        }

        // Lấy lịch chiếu từ mã lịch chiếu trong vé
        $lich_chieu = DB::table('lichchieuphim')->where('maLichChieuPhim', $lich_chieu->maLichChieuPhim)->first();

        // Lấy thông tin phim
        $phim = DB::table('ve_xem_phim')->where('ten_phim', $ve->ten_phim)->first();

        // Tạo mã hóa đơn mới
        $max_ma_hd = DB::connection('lelin_cgv')->table('hoa_don')->max('ma_hoa_don');
        $new_ma_hd = $max_ma_hd ? $max_ma_hd + 1 : 1;

        // Lưu vào bảng hoa_don của database lelin_cgv
        DB::connection('lelin_cgv')->table('hoa_don')->insert([
            'maKH' => $ve->ma_kh,
            'ma_ve' => $ve->ma_ve,
            'ma_hoa_don' => $new_ma_hd,
            'tong_tien' => $ve->gia_ve,
            'ngay_lap' => Carbon::now(),
            
        ]);

        return view('payment.thanh_toan_thanh_cong', [
            'khach_hang' => (array) $khach_hang,
            
            'user' => $user,
            'phims'=> $phims,
            've_xem_phim' => $ve,
            'phim' => $phim,
            'lich_chieu' => $lich_chieu
        ]);
    }
}
