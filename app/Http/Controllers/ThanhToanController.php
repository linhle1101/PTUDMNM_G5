<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanhToanController extends Controller
{
    public function index()
    {
        return view('thanh_toan');
    }

    public function handlePayment(Request $request)
    {
        // Xử lý thanh toán
        $paymentMethod = $request->input('payment_method_tt');
        $discountCode = $request->input('discount_code_tt');

        // Nếu chọn VNPay, chuyển sang trang QR
        if ($paymentMethod === 'vnpay') {
            return redirect()->route('thanh_toan');
        }

        return back()->with('error', 'Vui lòng chọn phương thức thanh toán');
    }

    public function qr()
    {
        return view('thanh_toan');
    }

    public function success()
    {
        return view('thanh_toan');
    }
}
