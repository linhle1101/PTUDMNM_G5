<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IconMenu extends Model
{
    protected $table = 'icon_menu';

    // ⚠️ Đảm bảo Laravel sử dụng đúng kết nối "lelin_cgv"
    protected $connection = 'cgv';

    // Nếu không dùng created_at/updated_at trong bảng
    public $timestamps = false;
}
