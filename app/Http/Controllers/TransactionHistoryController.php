<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionHistory;
use DB;

class TransactionHistoryController extends Controller
{
    public function showHistory()
    {
        $transactionHistories = DB::table('ve_xem_phim')
            ->join('phim', 've_xem_phim.ma_phim', '=', 'phim.ma_phim')
            ->join('lichchieuphim', 've_xem_phim.ma_lich_chieu', '=', 'lichchieuphim.maLichChieuPhim')
            ->join('phongchieuphim', 'lichchieuphim.maPhongChieuPhim', '=', 'phongchieuphim.maPhongChieu')
            ->select(
                've_xem_phim.ma_ve',
                'phongchieuphim.maPhongChieu',
                'lichchieuphim.ngayChieu',
                'lichchieuphim.caChieu',
                've_xem_phim.gia_ve',
                've_xem_phim.ngay_dat_ve',
                've_xem_phim.trang_thai_ve',
                'phim.ten AS phim',
                've_xem_phim.ma_ghe'
            )
            ->get();

        return view('layouts.transaction_history', compact('transactionHistories'));
    }
}
