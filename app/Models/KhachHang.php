<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;

    protected $table = 'khachhang'; // Chỉ định tên bảng

    protected $primaryKey = 'maKH'; // Chỉ định khóa chính

    public $incrementing = true; // Nếu maKH là AUTO_INCREMENT
    protected $keyType = 'int'; // Kiểu dữ liệu của khóa chính

    protected $fillable = [
        'hoTen', 'gioitinh', 'email', 'soDienThoai', 'ngaysinh'
    ];
}
