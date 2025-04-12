<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Theloaiphim
 * 
 * @property string $ma_the_loai
 * @property string|null $ten_the_loai
 * @property string|null $mo_ta
 *
 * @package App\Models
 */
class Theloaiphim extends Model
{
	protected $table = 'theloaiphim';
	protected $primaryKey = 'ma_the_loai';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'ten_the_loai',
		'mo_ta'
	];
}
