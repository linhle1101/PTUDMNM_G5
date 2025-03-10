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
                margin:20px;
                text-align:center;
            }
        </style>
</head>
<body>
@extends("layouts.sach_layout")
@section("title","Sách")
@section("content")
<div class='list-book'>
    @foreach($data as $row)
        <div class='book'>
        <a href="{{url('sach/detail/'. $row->id)}}">
            <img src="{{asset($row->link_anh_bia)}}" width='200px'
            height='200px'><br>
            <b>{{$row->tieu_de}}</b><br/>
            <i>{{number_format($row->gia_ban,0,",",".")}}đ</i>
        </a>
        </div>
    @endforeach
</div>
@endsection
</body>
</html>