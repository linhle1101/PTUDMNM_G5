<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\KhachHang; 

class QRController extends Controller
{
    public function index()
    {
        // Lấy thông tin người dùng đã đăng nhập
        $user = Auth::user();
        

        // Kiểm tra nếu user chưa đăng nhập
        if (!$user) {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập trước khi thanh toán.');
        }

        // Truyền user vào view
        return view('qr', [
            'user' => $user,
            'payment_date' => Carbon::now()->format('d/m/Y H:i:s'),
        ]);
    }

    public function confirmPayment()
    {
        // Xử lý logic xác nhận thanh toán nếu cần (có thể cập nhật trạng thái thanh toán trong database)
        return redirect()->route('thanh_toan_thanh_cong')->with('message', 'Thanh toán thành công!');
    }
}
