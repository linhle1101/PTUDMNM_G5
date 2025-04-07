namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class ThanhToanThanhCongController extends Controller
{
    public function success(Request $request)
    {
        // Lấy dữ liệu từ POST request (hoặc từ session nếu dữ liệu đã được lưu)
      
        $khach_hang = $request->input('khach_hang');
        $movie = $request->input('movie');
        $tong_tien_ve = $request->input('tong_tien_ve');

        // Lưu dữ liệu vào cơ sở dữ liệu
        $payment = Payment::create([
            'hoTen' => $khach_hang['hoTen'],
            'email' => $khach_hang['email'],
            'soDienThoai' => $khach_hang['soDienThoai'],
            'ngaysinh' => $khach_hang['ngaysinh'],
            'movie_name' => $movie['ten'],
            'movie_duration' => $movie['thoi_luong'],
            'movie_director' => $movie['ten_dao_dien'],
            'movie_release_date' => $movie['ngay_khoi_chieu'],
            'total_amount' => $tong_tien_ve,
        ]);
        
        // Trả về view với dữ liệu
        return view('thanh_toan_thanh_cong', compact('khach_hang', 'movie', 'tong_tien_ve'));
    }
}
