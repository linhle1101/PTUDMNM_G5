<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Khachhang
 * 
 * @property int $maKH
 * @property string $hoTen
 * @property string $gioitinh
 * @property string $email
 * @property int $soDienThoai
 * @property Carbon|null $ngaysinh
 *
 * @package App\Models
 */
class Khachhang extends Model
{
	protected $table = 'khachhang';
	protected $primaryKey = 'maKH';
	public $timestamps = false;

	protected $casts = [
		'soDienThoai' => 'int',
		'ngaysinh' => 'datetime'
	];

	protected $fillable = [
		'hoTen',
		'gioitinh',
		'email',
		'soDienThoai',
		'ngaysinh'
	];
}
