<?php

namespace App\Http\Controllers;

use App\Models\IconMenu;
use App\Models\Lichchieuphim;
use App\Models\SuKien;
use App\Models\Phim;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $suKiens = SuKien::orderBy('ngay_su_kien', 'desc')->take(5)->get();

        $phims = Phim::where('trangThai', 'hoat_dong')->get();
        $iconMenus = IconMenu::all();

        return view('home', [
            'suKiens' => $suKiens,
            'phims' => $phims,
            'iconMenus' => $iconMenus
        ]);
    }

    public function muave(Request $request)
    {
        $maPhim = $request->query('ma_phim');
        $phim = Phim::findOrFail($maPhim);

        if ($request->has('ghe')) {
            session(['selected_seats' => $request->input('ghe', [])]);
        }

        $ngayChieuList = Lichchieuphim::where('maPhim', $maPhim)
            ->selectRaw('DATE(ngayChieu) as ngay')
            ->distinct()
            ->pluck('ngay');

        $gioChieuRaw = Lichchieuphim::where('maPhim', $maPhim)
            ->select('caChieu')
            ->distinct()
            ->pluck('caChieu');

        $gioChieuList = collect();
        foreach ($gioChieuRaw as $chuoiGio) {
            $gioList = explode(',', $chuoiGio);
            foreach ($gioList as $gio) {
                $gioChieuList->push(trim($gio));
            }
        }

        $gioChieuList = $gioChieuList->unique()->sort()->values();

        $rows = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];

        $selectedSeats = session('selected_seats', []);
        $selectedDate = $request->input('ngay');
        $selectedTime = $request->input('gio');

        return view('muave', compact(
            'phim',
            'maPhim',
            'ngayChieuList',
            'gioChieuList',
            'rows',
            'selectedSeats',
            'selectedDate',
            'selectedTime'
        ));
    }




    public function muaveAjax(Request $request)
    {
        $selectedSeats = $request->input('ghe', []);
        session(['selected_seats' => $selectedSeats]);

        return response()->json([
            'selectedSeats' => $selectedSeats,
            'bookedSeats' => []
        ]);
    }
}
