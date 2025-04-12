<?php
namespace App\Http\Controllers\QLLC;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\QLLC;
use Carbon\Carbon;

class LichChieuController extends Controller
{
    public function lichChieu(Request $request)
    {
         // Lấy giá trị ngày từ request
    $ngayChieu = $request->input('loc_dl');

    // Ngày hiện tại
    $today = Carbon::today();

    // Ngày sau một tuần
    $dateAfterOneWeek = $today->copy()->addWeek();

    // Ngày sau hai tuần
    $dateAfterTwoWeeks = $today->copy()->addWeeks(2);

    // Nếu có ngày được chọn, lọc theo ngày
    if ($ngayChieu) {
        $data = DB::table('lichchieuphim')
            ->join('phim', 'lichchieuphim.maPhim', '=', 'phim.ma_phim')
            ->select(
                'lichchieuphim.maLichChieuPhim',
                'lichchieuphim.ngayChieu',
                'lichchieuphim.maPhongChieuPhim',
                'lichchieuphim.caChieu',
                'phim.ten',
                'phim.ma_phim'
            )
            ->whereDate('lichchieuphim.ngayChieu', $ngayChieu)
            ->get();
    } else {
        // Nếu không có ngày, hiển thị tất cả
        $data = DB::table('lichchieuphim')
            ->join('phim', 'lichchieuphim.maPhim', '=', 'phim.ma_phim')
            ->select(
                'lichchieuphim.maLichChieuPhim',
                'lichchieuphim.ngayChieu',
                'lichchieuphim.maPhongChieuPhim',
                'lichchieuphim.caChieu',
                'phim.ten',
                'phim.ma_phim'
            )
            ->get();
    }

    // Tổng số bản ghi
    $total = $data->count();

    // Truyền dữ liệu đến view
    return view('QLLC.lich-chieu', compact('data', 'total', 'ngayChieu', 'dateAfterOneWeek', 'dateAfterTwoWeeks'));
    }

function lichchieudelete(Request $request)
{
    $maLichChieuPhim = $request->input("maLichChieuPhim");
    DB::table("lichchieuphim")->where("maLichChieuPhim", $maLichChieuPhim)->delete();

    return redirect()->route('lichChieu')->with('status', 'Xóa lịch chiếu thành công.');
}
function lichchieuedit($maLichChieuPhim)
{
    $cgv = DB::table('lichchieuphim')
    ->join('phim', 'lichchieuphim.maPhim', '=', 'phim.ma_phim') // Kết hợp dựa trên maPhim
    ->where('lichchieuphim.maLichChieuPhim', $maLichChieuPhim)
    ->select(
        'lichchieuphim.*', // Lấy tất cả các cột từ bảng lichchieuphim
        'phim.ten', // Lấy tên phim từ bảng phim
        'phim.ma_phim' // Lấy mã phim từ bảng phim
    ) ->first();

     // Lấy danh sách phòng chiếu
     $phongChieuList = DB::table('phongchieuphim')->get(); 
     return view("QLLC.lichchieuedit", compact("cgv", "phongChieuList"));
}

function saveedit(Request $request){
    $request->validate([
        'maLichChieuPhim' => ['required', 'string', 'max:255'],
        'ma_phim' => ['required', 'string', 'max:255'],
        'ten' => ['nullable', 'string'],
        'ngayChieu' => ['required', 'string'],
        'maPhongChieuPhim' => ['required', 'string'],
        'caChieu' => ['required', 'array'],
        
        ]);
        $ma_phim = $request->input('ma_phim');
        $ngayChieu = $request->input('ngayChieu');
        $maPhongChieuPhim = $request->input('maPhongChieuPhim');
        $caChieu = implode(',', $request->input('caChieu', []));
    
                // Kiểm tra lịch chiếu trùng
                $exists = DB::table('lichchieuphim')
                ->where('maPhim', $ma_phim) // Sử dụng đúng tên cột
                ->where('ngayChieu', $ngayChieu)
                ->where('maPhongChieuPhim', $maPhongChieuPhim)
                ->where('caChieu', $caChieu)
                ->exists();
        
            if ($exists) {
                return redirect()->back()->withErrors(['Lịch chiếu đã tồn tại. Vui lòng chọn thông tin khác.']);
            }
        $maLichChieuPhim = $request->input('maLichChieuPhim');
    $data["maLichChieuPhim"] = $request->input("maLichChieuPhim");
    $data["maPhim"] = $request->input("ma_phim");
    $data["ngayChieu"] = $request->input("ngayChieu");
    $data["maPhongChieuPhim"] = $request->input("maPhongChieuPhim");
    $data["caChieu"] = implode(',', $request->input('caChieu', ''));
    DB::table("lichchieuphim")->where("maLichChieuPhim",$maLichChieuPhim)->update($data);
    return redirect()->route('lichChieu')->with('status', 'Cập
    nhật thành công');
    }
    function themlichchieu(Request $request)
{
    $cgv = DB::table('phim')
    
    ->select(
        'ma_phim', // Lấy tất cả các cột từ bảng lichchieuphim
        'ten', // Lấy tên phim từ bảng phim
     
    ) ->first();
    // Lấy danh sách phim
    $phimList = DB::table('phim')->select('ma_phim', 'ten')->get();

    $caChieu = '';
     // Lấy danh sách phòng chiếu
     $phongChieuList = DB::table('phongchieuphim')->get(); 
     return view("QLLC.themlichchieu", compact("cgv", "phongChieuList","caChieu","phimList"));
}

function them(Request $request){
    $request->validate([
        
        'ma_phim' => ['required', 'string', 'max:255'],
        'ten' => ['nullable', 'string'],
        'ngayChieu' => ['required', 'string'],
        'maPhongChieuPhim' => ['required', 'string'],
        'caChieu' => ['required', 'array'],
        
        ]);
        $ma_phim = $request->input('ma_phim');
        $ngayChieu = $request->input('ngayChieu');
        $maPhongChieuPhim = $request->input('maPhongChieuPhim');
        $caChieu = implode(',', $request->input('caChieu', []));
    
        // Kiểm tra lịch chiếu trùng
        $exists = DB::table('lichchieuphim')
            // Sử dụng đúng tên cột
            ->where('ngayChieu', $ngayChieu)
            ->where('maPhongChieuPhim', $maPhongChieuPhim)
            ->where('caChieu', $caChieu)
            ->exists();
    
        if ($exists) {
            return redirect()->back()->withErrors(['Lịch chiếu đã tồn tại. Vui lòng chọn thông tin khác.']);
        }
    $data["maLichChieuPhim"] = $request->input("maLichChieuPhim");
    $data["maPhim"] = $request->input("ma_phim");
    $data["ngayChieu"] = $request->input("ngayChieu");
    $data["maPhongChieuPhim"] = $request->input("maPhongChieuPhim");
    $data["caChieu"] = implode(',', $request->input('caChieu', ''));
    DB::table("lichchieuphim")->insert($data);

    return redirect()->route('lichChieu')->with('status', 'Thêm lịch chiếu thành công');
    }
}