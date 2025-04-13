<?php 

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // Định nghĩa cấu trúc menu
        $menu_items = [
            '☰ Menu' => [
                'submenu' => [
                    'Phim' => [
                        'link' => 'phim',
                        'submenu' => [
                            'phimdangchieu' => 'Phim Đang Chiếu',
                            'phimsapchieu' => 'Phim Sắp Chiếu'
                        ]
                    ],
                    'Thành Viên' => [
                        'link' => 'thanhvien',
                        'submenu' => []
                    ]
                ]
            ]
        ];

         // Lấy icon_menu từ database phụ 'lelin'
         try {
            $icon_menu = DB::connection('lelin')->table('icon_menu')->get();
        } catch (\Exception $e) {
            $icon_menu = collect(); // Tránh lỗi nếu không kết nối được
        }

        // Chia sẻ dữ liệu với tất cả view
        View::share([
            'menu_items' => $menu_items,
            'icon_menu' => $icon_menu
        ]);
    }
}
