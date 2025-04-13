<?php

namespace App\Http\Controllers;

use App\Models\VeXemPhim;
use Illuminate\Support\Facades\Auth; // Add this line to import the Auth class

class TransactionHistoryController extends Controller
{
    public function transactionHistory()
    {
        // Get the current logged in user's ID
        $userId = Auth::id(); // Use Auth to get the user ID

        // Retrieve transaction history for the logged-in user
        $transactionHistories = VeXemPhim::join('users', 'users.id', '=', 've_xem_phim.ma_kh')
            ->where('users.id', $userId)  // Filter by the user's ID
            ->select('ve_xem_phim.ma_ve', 've_xem_phim.phong_chieu', 've_xem_phim.ngay_Chieu', 
                     've_xem_phim.gio_Chieu', 've_xem_phim.gia_ve', 've_xem_phim.ngay_dat_ve', 
                     've_xem_phim.trang_thai_ve', 've_xem_phim.phim', 've_xem_phim.ma_ghe')
            ->get();  // Fetch the data

        // Return the view and pass the transaction histories
        return view('layouts.transaction_history', compact('transactionHistories'));
    }
}
