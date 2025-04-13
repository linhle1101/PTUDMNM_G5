<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SuKien
 * 
 * @property int $id
 * @property string $tieu_de
 * @property string|null $mo_ta
 * @property string|null $duong_dan_hinh_anh
 * @property string|null $duong_dan_chi_tiet
 * @property Carbon|null $ngay_su_kien
 *
 * @package App\Models
 */
class SuKien extends Model
{
	protected $table = 'su_kien';
	public $timestamps = false;

	protected $casts = [
		'ngay_su_kien' => 'datetime'
	];

	protected $fillable = [
		'tieu_de',
		'mo_ta',
		'duong_dan_hinh_anh',
		'duong_dan_chi_tiet',
		'ngay_su_kien'
	];
}
