<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AccountController extends Controller
{
    function accountpanel()
        {
            $user = DB::table("users")->whereRaw("id=?",[Auth::user()->id])->first();
            return view("layouts.account",compact("user"));
        }
    function saveaccountinfo(Request $request)
        {
            $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['nullable', 'string'] 
        ]);
            $id = $request->input('id'); 
            $data["name"] = $request->input("name");
            $data["phone"] = $request->input("phone");
            $data["email"] = $request->input("email");
            DB::table("users")->where("id",$id)->update($data);
            return redirect()->route('account')->with('status', 'Cập nhật thành công');
        }
}
