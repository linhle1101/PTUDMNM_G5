<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Lichchieuphim
 * 
 * @property string $maLichChieuPhim
 * @property string|null $maPhongChieuPhim
 * @property string $maPhim
 * @property Carbon|null $ngayChieu
 * @property string|null $caChieu
 * 
 * @property Phim $phim
 *
 * @package App\Models
 */
class Lichchieuphim extends Model
{
	protected $table = 'lichchieuphim';
	protected $primaryKey = 'maLichChieuPhim';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ngayChieu' => 'datetime'
	];

	protected $fillable = [
		'maPhongChieuPhim',
		'maPhim',
		'ngayChieu',
		'caChieu'
	];

	public function phim()
	{
		return $this->belongsTo(Phim::class, 'maPhim');
	}
}
