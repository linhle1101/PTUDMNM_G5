<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class NhanvienController extends Controller
{
    //

    function qlynhanvien(Request $request)
    {
        $query = DB::table('nhanvien')
        // ->join('taikhoan_nv', 'nhanvien.maNV', '=', 'taikhoan_nv.maNV')
        ->select(
            'nhanvien.maNV',
            'nhanvien.ten_NV',
            'nhanvien.email',
            'nhanvien.gioitinh',
            'nhanvien.soDienThoai',
            'nhanvien.vaitro',
            'nhanvien.ngaytao'
        );

        // Tìm kiếm theo nhân viên
        if ($request->has('tennv') && !empty($request->input('tennv'))) {
            $query->where('nhanvien.ten_NV', 'LIKE', '%' . $request->input('tennv') . '%');
        }
        // Phân trang (10 bản ghi mỗi trang)
        $data = $query->paginate(10);
        
        return view('QLNV.QLNV_main', compact('data'));
    }

    //Xóa nhân viên
    function xoanhanvien(Request $request)
    {
        $id = $request->input("id");
        DB::table("nhanvien")->where("maNV",$id)->delete();
        return redirect()->route('qlynhanvien')->with('status', 'Xóa thành công');
    }

    // Thêm nhân viên
    function themnhanvien(Request $request)
    {
            $action = "add";
            return view("QLNV.nhanvien_form",compact("action"));
    }
    
    // sửa thông tin nhân viên
    public function suanhanvien($maNV)
    {
        $action = "edit";
        $nhanvien = DB::table("nhanvien")->where("maNV",$maNV)->first();
        return view("QLNV.nhanvien_form",compact("nhanvien","action"));
    }

    public function nhanviensave($action, Request $request)
    {
        $request->validate([
            'ten_NV'=>['required','string','max:200'],
            'email'=>['required','string','max:100'],
            'gioitinh'=>['required','in:Nam,Nữ'],
            'cccd'=>['required','string','max:12'],
            'dantoc'=>['required','string','max:50'],
            'ngaysinh'=>['required','date'],
            'soDienThoai'=>['required','string','max:10'],
            'diachithuongtru'=>['nullable','string','max:400'],
            'diachitamtru'=>['nullable','string','max:400'],
            'file_hinhanh'=>['nullable','image'],
            'ngaytao'=>['required','date']
        ]);

        $data =$request ->except("_token");
        // kiểm tra có bị trùng email, sdt và cccd không
        if ($action == "add") {
            $errors = [];
        
            if (DB::table('nhanvien')->where('email', $request->email)->exists()) {
                $errors[] = 'Email đã tồn tại.';
            }
        
            if (DB::table('nhanvien')->where('cccd', $request->cccd)->exists()) {
                $errors[] = 'CCCD đã tồn tại.';
            }
        
            if (DB::table('nhanvien')->where('soDienThoai', $request->soDienThoai)->exists()) {
                $errors[] = 'Số điện thoại đã tồn tại.';
            }
        
            if (!empty($errors)) {
                return redirect()->back()->withErrors($errors)->withInput();
            }
        }

        if($action=="edit")
        $data = $request->except("_token", "maNV");
        if($request->hasFile("file_hinhanh"))
        {
            $fileName = $request->input("tieu_de") ."_".rand(1000000,9999999).'.' . $request->file('file_hinhanh')->extension();
            $request->file('file_hinhanh')->storeAs('public/nhanvien_images', $fileName);
            $data['file_hinhanh'] = $fileName;
        }

        $message= "";
        if($action=="add")
            {
                DB::table("nhanvien")->insert($data);
                DB::table("users")->insert([
                    'name' => $request->ten_NV,
                    'email' => $request->email,
                    'password' => bcrypt($request->cccd),
                    'roles' => 'Nhân viên',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
                $message = "Thêm thành công";
            }
        else if($action=="edit")
        {
            $maNV = $request->maNV;
            DB::table("nhanvien")->where("maNV",$maNV)->update($data);
            $message = "Cập nhật thành công";
        }
        return redirect()->route('qlynhanvien')->with('status', $message);
    }







}
