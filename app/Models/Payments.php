namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'hoTen',
        'email',
        'soDienThoai',
        'ngaysinh',
        'movie_name',
        'movie_duration',
        'movie_director',
        'movie_release_date',
        'total_amount',
    ];
}
