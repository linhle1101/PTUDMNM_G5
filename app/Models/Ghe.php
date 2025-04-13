<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ghe
 * 
 * @property string $ma_ghe
 * @property string $ma_phong
 * @property string|null $trang_thai
 *
 * @package App\Models
 */
class Ghe extends Model
{
	protected $table = 'ghe';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'trang_thai'
	];
}
