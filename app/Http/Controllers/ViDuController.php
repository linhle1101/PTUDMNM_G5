<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TestSendEmail;
use App\Models\User;
class ViDuController extends Controller
{
    //
    function Linhle(){
        $name = "TurtleRabbit01";
        return view('vidu1', ['name'=> $name]);
    }

    function vidu2() {
        return view ('vidu2');
    }

    function tinhtong(Request $request)
    {
    $so_a = $request->input("so_a");
    $so_b = $request->input("so_b");
    $ket_qua = $so_a+$so_b;
    return "Kết quả là: ".$ket_qua;
    }

    function vidu()
    {
        return 'tuongvyhello';
    }

    function ten() {
        return "phamhaiyen";
    }


function inten(){
    return "Nguyễn Thị Thảo Nhi";
}

function testemail()
 {
 $user = User::find(2);
 Notification::send($user, new TestSendEmail());
 
 }


}

