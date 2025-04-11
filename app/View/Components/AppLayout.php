<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $phim = DB::table('phim')->get();

        // Lấy dữ liệu icon_menu từ CSDL phụ "lelin"
        $icon_menu = DB::connection('cgv')->table('icon_menu')->get();

        $menu_items = [
            '☰ Menu' => [
                'submenu' => [
                    'Phim' => [
                        'link' => 'phim',
                        'submenu' => [
                            'phim_dang_chieu' => 'Phim Đang Chiếu',
                            'phim_sap_chieu' => 'Phim Sắp Chiếu'
                        ]
                    ],
                    'Thành Viên' => [
                        'link' => 'thanhvien',
                        'submenu' => []
                    ]
                ]
            ]
        ];
        
        return view('layouts.app', compact("phim", "icon_menu","menu_items"));
    }
}