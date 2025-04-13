<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VeXemPhim
 * 
 * @property int $ma_ve
 * @property string $ma_kh
 * @property string $ma_lich_chieu
 * @property int $gia_ve
 * @property Carbon $ngay_dat_ve
 * @property bool|null $trang_thai_ve
 *
 * @package App\Models
 */
class VeXemPhim extends Model
{
	protected $table = 've_xem_phim';
	protected $primaryKey = 'ma_ve';
	public $timestamps = false;

	protected $casts = [
		'gia_ve' => 'int',
		'ngay_dat_ve' => 'datetime',
		'trang_thai_ve' => 'bool'
	];

	protected $fillable = [
		'ma_kh',
		'ma_lich_chieu',
		'gia_ve',
		'ngay_dat_ve',
		'trang_thai_ve',
		'ten_phim'
	];
}
