<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TaikhoanNv
 * 
 * @property string $maNV
 * @property string|null $tenDangNhap
 * @property string|null $matKhau
 * @property Carbon|null $ngayTao
 *
 * @package App\Models
 */
class TaikhoanNv extends Model
{
	protected $table = 'taikhoan_nv';
	protected $primaryKey = 'maNV';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ngayTao' => 'datetime'
	];

	protected $fillable = [
		'tenDangNhap',
		'matKhau',
		'ngayTao'
	];
}
