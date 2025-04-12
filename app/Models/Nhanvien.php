<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Nhanvien
 * 
 * @property string $maNV
 * @property string $ten_NV
 * @property string $email
 * @property string|null $gioitinh
 * @property string $cccd
 * @property string|null $dantoc
 * @property Carbon $ngaysinh
 * @property string $soDienThoai
 * @property string|null $vaitro
 * @property string $diachithuongtru
 * @property string $diachitamtru
 * @property string $file_hinhAnh
 * @property Carbon|null $ngaytao
 *
 * @package App\Models
 */
class Nhanvien extends Model
{
	protected $table = 'nhanvien';
	protected $primaryKey = 'maNV';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ngaysinh' => 'datetime',
		'ngaytao' => 'datetime'
	];

	protected $fillable = [
		'ten_NV',
		'email',
		'gioitinh',
		'cccd',
		'dantoc',
		'ngaysinh',
		'soDienThoai',
		'vaitro',
		'diachithuongtru',
		'diachitamtru',
		'file_hinhAnh',
		'ngaytao'
	];
}
