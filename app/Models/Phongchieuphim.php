<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Phongchieuphim
 * 
 * @property string $maPhongChieu
 * @property string|null $trangThaiPhongChieu
 *
 * @package App\Models
 */
class Phongchieuphim extends Model
{
	protected $table = 'phongchieuphim';
	protected $primaryKey = 'maPhongChieu';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'trangThaiPhongChieu'
	];
}
