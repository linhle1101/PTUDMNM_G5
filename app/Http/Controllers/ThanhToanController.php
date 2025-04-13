<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ThanhToanController extends Controller
{
    public function index()
    {
        // Lấy giá vé mới nhất từ bảng ve_xem_phim
        $ve_xem_phim = DB::table('ve_xem_phim')->latest('ma_ve')->first();
        $tong_tien_ve = $ve_xem_phim ? $ve_xem_phim->gia_ve : 0;

        return view('thanh_toan', compact('tong_tien_ve'));
    }

    public function handlePayment(Request $request)
    {
        // Xử lý thanh toán
        $paymentMethod = $request->input('payment_method_tt');
        $discountCode = $request->input('discount_code_tt');

        // Nếu chọn VNPay, chuyển sang trang QR
        if ($paymentMethod === 'vnpay') {
            return redirect()->route('qr');
        }

        return back()->with('error', 'Vui lòng chọn phương thức thanh toán');
    }

  
    public function showQR()
    {
        return view('qr');
    }
}
