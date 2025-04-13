<?php

namespace App\Http\Controllers;

use App\Models\Lichchieuphim;
use App\Models\Phim;
use App\Models\VeXemPhim;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DatVeController extends Controller
{
    public function luuVe(Request $request)
    {
        Log::error('Dữ liệu người dùng gửi lên:', $request->all());

        try {
            $request->validate([
                'ma_phim' => 'required',
                'ngay' => 'required|date',
                'gio' => 'required|string',
            ]);

            $selectedSeats = session('selected_seats', []);

            $lichChieu = Lichchieuphim::where('maPhim', $request->ma_phim)
                ->whereDate('ngayChieu', $request->ngay)
                ->where('caChieu', 'like', '%' . $request->gio . '%')
                ->first();

            if (!$lichChieu) {
                return redirect()->back()->with('error', 'Không tìm thấy lịch chiếu phù hợp!');
            }

            $phim = Phim::find($request->ma_phim);
            $tenPhim = $phim ? $phim->ten : 'Không rõ';

            foreach ($selectedSeats as $ghe) {
                VeXemPhim::create([
                    'ma_kh' => 4,
                    'ma_lich_chieu' => $lichChieu->maLichChieuPhim,
                    'gia_ve' => 75000,
                    'ngay_dat_ve' => Carbon::now(),
                    'trang_thai_ve' => 1,
                    'ten_phim' => $tenPhim,
                    'ghe' => $ghe, 
                ]);
            }

            session()->forget('selected_seats');

            return redirect()->route('home')->with('success', 'Đặt vé thành công!');
        } catch (\Exception $e) {
            Log::error('Lỗi khi đặt vé: ' . $e->getMessage(), [
                'line' => $e->getLine(),
                'file' => $e->getFile(),
                'trace' => $e->getTraceAsString()
            ]);
            return redirect()->back()->with('error', 'Đã có lỗi xảy ra trong quá trình đặt vé!');
        }
    }
}
