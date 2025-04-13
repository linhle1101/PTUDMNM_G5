<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'ma_ve', 'ma_phong', 'ma_lich_chieu', 'ma_phim', 'gia_ve', 'ngay_dat_ve', 'trang_thai_ve',
    ];

    public function seats()
    {
        return $this->hasMany(Seat::class, 'ma_ve', 'ma_ve');
    }
}

