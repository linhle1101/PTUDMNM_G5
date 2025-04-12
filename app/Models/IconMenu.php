<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IconMenu
 * 
 * @property int $id
 * @property string $ten_muc
 * @property string|null $duong_dan_hinh_anh
 * @property string|null $duong_dan_chi_tiet
 * @property string|null $mo_ta
 *
 * @package App\Models
 */
class IconMenu extends Model
{
	protected $table = 'icon_menu';
	public $timestamps = false;

	protected $fillable = [
		'ten_muc',
		'duong_dan_hinh_anh',
		'duong_dan_chi_tiet',
		'mo_ta'
	];
}
