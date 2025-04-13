<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaikhoanKh
 * 
 * @property int $maKH
 * @property string|null $email
 * @property string|null $matKhau
 *
 * @package App\Models
 */
class TaikhoanKh extends Model
{
	protected $table = 'taikhoan_kh';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'maKH' => 'int'
	];

	protected $fillable = [
		'maKH',
		'email',
		'matKhau'
	];
}
