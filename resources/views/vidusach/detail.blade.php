<html>
    <head>
        <style>
            .navbar 
            {
                background-color: #ff5850;
                font-weight:bold;
            }
            .nav-item a 
            {
                color: #fff!important;
            }
            .navbar-nav 
            {
                margin:0 auto;
            }
            .list-book
            {
                display:grid;
                grid-template-columns:repeat(4,24%);
            }
            .book 
            {
                margin:10px;
                text-align:center;
            }
        </style>
</head>
<body>
@extends("layouts.sach_layout")
@section("title","Chi tiết sách")
@section("content")
<div style="width: 100%; margin:0 auto; padding:10px;">
    @foreach ($data as $data) 
        <h2>{{$data->tieu_de}}</h2>
        <div style="float:left;">
            <img src="{{asset($data->link_anh_bia)}}" width=100%; height=180px;>
        </div>
        <div style="float:left; margin-left: 10px;">
        Nhà cung cấp: {{$data->nha_cung_cap}}<br>
        Nhà xuất bản: {{$data->nha_xuat_ban}}<br>
        Tác giả: {{$data->tac_gia}}<br>
        Hình thức bìa: {{$data->hinh_thuc_bia}}<br>
        </div>
        <br style="clear:both">
        <div>
        <b> Mô tả: </b><br>
        {{$data->mo_ta}}
        </div>
    @endforeach
</div>
@endsection
</body>
</html>