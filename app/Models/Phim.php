<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Phim
 * 
 * @property string $ma_phim
 * @property string|null $ten
 * @property string|null $ma_the_loai
 * @property string|null $thoi_luong
 * @property Carbon|null $ngay_khoi_chieu
 * @property string|null $ten_dao_dien
 * @property string|null $nuoc_san_xuat
 * @property int|null $nam_san_xuat
 * @property string|null $mo_ta
 * @property string|null $file_hinhAnh
 * @property string|null $link_hinh
 * @property string|null $trangThai
 * 
 * @property Collection|Lichchieuphim[] $lichchieuphims
 *
 * @package App\Models
 */
class Phim extends Model
{
	protected $table = 'phim';
	protected $primaryKey = 'ma_phim';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ngay_khoi_chieu' => 'datetime',
		'nam_san_xuat' => 'int'
	];

	protected $fillable = [
		'ten',
		'ma_the_loai',
		'thoi_luong',
		'ngay_khoi_chieu',
		'ten_dao_dien',
		'nuoc_san_xuat',
		'nam_san_xuat',
		'mo_ta',
		'file_hinhAnh',
		'link_hinh',
		'trangThai'
	];

	public function lichchieuphims()
	{
		return $this->hasMany(Lichchieuphim::class, 'maPhim');
	}
}
