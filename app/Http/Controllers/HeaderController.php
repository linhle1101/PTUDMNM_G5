<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeaderController extends Controller
{
    public function show()
    {
        $phim = DB::table('phim')->get();

        $icon_menu = DB::connection('cgv')->table('icon_menu')->get();
        var_dump($icon_menu);
        die();

        

        return view('partials.header', compact('phim', 'icon_menu', 'menu_items'));
    }
}