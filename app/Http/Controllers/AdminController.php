<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    function qlyphim()
    {
        $query = DB::table('phim')
        ->join('theloaiphim', 'phim.ma_the_loai', '=', 'theloaiphim.ma_the_loai')
        ->select(
            'phim.ma_phim',
            'phim.ten',
            'theloaiphim.ten_the_loai',
            'phim.thoi_luong',
            'phim.ngay_khoi_chieu',
            'phim.nuoc_san_xuat',
            'phim.nam_san_xuat',
            'phim.ten_dao_dien',
            'phim.mo_ta'
        );

    // Tìm kiếm theo tên phim
    if ($request->has('tenphim')) {
        $query->where('phim.ten', 'LIKE', '%' . $request->input('tenphim') . '%');
    }

    // Lọc theo tháng
    if ($request->has('month')) {
        $query->whereMonth('phim.ngay_khoi_chieu', $request->input('month'));
    }

    // Phân trang (10 bản ghi mỗi trang)
    $data = $query->paginate(10);

    return view('admin.qlyphim', compact('data'));
    }
    //Xóa phim
    function xoaphim(Request $request)
    {
        $id = $request->input("id");
        DB::table("phim")->where("id",$id)->delete();
        return redirect()->route('qlyphim')->with('status', 'Xóa thành công');
    }
    //Thêm phim
    function themphim()
    {
        $list_the_loai = DB::table("theloaiphim")->get();
        return view("admin.themphim",compact("list_the_loai"));
    }
    function addmovie(Request $request)
    {
        $request->validate([
            'ten' => ['required', 'string', 'max:200'],
            'ma_the_loai' => ['required', 'string'],
            'thoi_luong' => ['required', 'integer'],
            'ngay_khoi_chieu' => ['required', 'date'],
            'nuoc_san_xuat' => ['required', 'string'],
            'ten_dao_dien' => ['required', 'string'],
            'nam_san_xuat' => ['required', 'integer'],
            'mo_ta' => ['nullable', 'string'],
            'file_hinhAnh' => ['nullable', 'image']
        ]);
        $data["ten"] = $request->input("ten");
        $data["ma_the_loai"] = $request->input("ma_the_loai");
        $data["thoi_luong"] = $request->input("thoi_luong");
        $data["ngay_khoi_chieu"] = $request->input("ngay_khoi_chieu");
        $data["nuoc_san_xuat"] = $request->input("nuoc_san_xuat");
        $data["ten_dao_dien"] = $request->input("ten_dao_dien");
        $data["nam_san_xuat"] = $request->input("nam_san_xuat");
        $data["mo_ta"] = $request->input("mo_ta");
        if($request->hasFile("file"))
        {
            //Tạo tên file
            $fileName = Str::limit(Str::slug($data["ten"],'-'),50,'') . '-' . time() . '.' . $request->file('file')->extension();
            //File được lưu vào thư mục storage/app/public/movie
            $request->file('file')->storeAs('public/movie', $fileName);
            $data['file_hinhAnh'] = $fileName;
        }
        DB::table("phim")->insert($data);
        return redirect()->route('qlyphim')->with('status', 'Thêm thành công');
    }
    //Sửa phim
    function suaphim($id)
    {
        $data = DB::table("phim")->where("ma_phim",$id)->first();
        $list_the_loai = DB::table("theloaiphim")->get();
        return view("admin.suaphim",compact("data","list_the_loai"));
    }
    function editmovie(Request $request)
    {
        $request->validate([
            'ten' => ['required', 'string', 'max:200'],
            'ma_the_loai' => ['required', 'string'],
            'thoi_luong' => ['required', 'integer'],
            'ngay_khoi_chieu' => ['required', 'date'],
            'nuoc_san_xuat' => ['required', 'string'],
            'ten_dao_dien' => ['required', 'string'],
            'nam_san_xuat' => ['required', 'integer'],
            'mo_ta' => ['nullable', 'string'],
            'file_hinhAnh' => ['nullable', 'image']
        ]);
        $id = $request->input('id');
        $data["ten"] = $request->input("ten");
        $data["ma_the_loai"] = $request->input("ma_the_loai");
        $data["thoi_luong"] = $request->input("thoi_luong");
        $data["ngay_khoi_chieu"] = $request->input("ngay_khoi_chieu");
        $data["nuoc_san_xuat"] = $request->input("nuoc_san_xuat");
        $data["ten_dao_dien"] = $request->input("ten_dao_dien");
        $data["nam_san_xuat"] = $request->input("nam_san_xuat");
        $data["mo_ta"] = $request->input("mo_ta");
        if($request->hasFile("file"))
        {
            //Tạo tên file bằng cách lấy tên phim -> loại bỏ các ký tự đặc biệt -> thêm dấu thời gian để tránh trùng tên
            $fileName = Str::limit(Str::slug($data["ten"],'-'),50,'') . '-' . time() . '.' . $request->file('file')->extension();
            //File được lưu vào thư mục storage/app/public/movie
            $request->file('file')->storeAs('public/movie', $fileName);
            $data['file_hinhAnh'] = $fileName;
        }
        DB::table("phim")->where("ma_phim",$id)->update($data);
        return redirect()->route('qlyphim')->with('status', 'Cập nhật thành công');
    }
}
