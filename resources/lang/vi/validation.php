<?php
/*
return [
'min' => [
'numeric' => 'Giá trị :attribute nhỏ nhất là :min.',
'file' => 'Kích thước :attribute nhỏ nhất là :min KB.',
'string' => ':attribute phải có ít nhất là :min ký tự.',
'array' => 'Mảng :attribute phải có ít nhất :min phần tử.',
],
'max' => [
'numeric' => 'Giá trị :attribute lớn nhất là :max.',
'file' => 'Kích thước :attribute max nhất là :max KB.',
'string' => ':attribute phải có ít nhất là :max ký tự.',
'array' => 'Mảng :attribute phải có ít nhất :max phần tử.',
],

'unique' => ':attribute đã được đăng ký.',
'attributes' => ["password"=>"Mật khẩu"],
'required'=>[":attribute"=>"Trường :attribute là bắt buộc phải nhập."],
];
*/



return [
    'min' => [
        'numeric' => 'Giá trị :attribute nhỏ nhất là :min.',
        'file' => 'Kích thước :attribute nhỏ nhất là :min KB.',
        'string' => ':attribute phải có ít nhất :min ký tự.',
        'array' => 'Mảng :attribute phải có ít nhất :min phần tử.',
    ],
    'max' => [
        'numeric' => 'Giá trị :attribute lớn nhất là :max.',
        'file' => 'Kích thước :attribute lớn nhất là :max KB.', 
        'string' => ':attribute không được vượt quá :max ký tự.', 
        'array' => 'Mảng :attribute không được có quá :max phần tử.',
    ],

    'unique' => ':attribute đã được đăng ký.',
    'required' => 'Trường :attribute là trường bắt buộc phải nhập.',
    
    // Optional: thêm một số lỗi thường gặp
    'email' => ':attribute không đúng định dạng email.',
    'date' => ':attribute phải là một ngày hợp lệ.',
    'image' => ':attribute phải là một tệp hình ảnh.',
    'in' => 'Giá trị đã chọn cho :attribute không hợp lệ.',

    'attributes' => [
        'password' => 'Mật khẩu',
        'email' => 'Email',
        'ten_NV' => 'Tên nhân viên',
        'gioitinh' => 'Giới tính',
        'cccd' => 'CCCD',
        'dantoc' => 'Dân tộc',
        'ngaysinh' => 'Ngày sinh',
        'soDienThoai' => 'Số điện thoại',
        'diachithuongtru' => 'Địa chỉ thường trú',
        'diachitamtru' => 'Địa chỉ tạm trú',
        'file_hinhanh' => 'Ảnh đại diện',
        'ngaytao' => 'Ngày tham gia',
    ],
];
?>




