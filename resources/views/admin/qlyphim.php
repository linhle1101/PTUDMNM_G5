<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUẢN LÝ PHIM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/qly.css')}}">
</head>

<body>
<x-qly-layout>
    @if ($errors->any())
    <div style='color:red;width:30%; margin:0 auto'>
    <div >
    {{ __('Whoops! Something went wrong.') }}
    </div>
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif
    @if (session('status'))
    <div class="alert alert-success">
    {{ session('status') }}
    </div>
    @endif
    <H2>QUẢN LÝ PHIM</H2>
    <div class="timkiem_themmoi">
        <div class="timkiem">
            <form action="{{ route('qlyphim') }}" method="get">
                @csrf
                Tên phim: <input class="nhap" list="Tên phim" name="tenphim" placeholder="Nhập từ khóa cần tìm">
                                <datalist id="Tên phim">
                                    @foreach($data as $row)
                                        <option value="{{$row->ten}}">
                                    @endforeach
                                </datalist>
                <input class="btn-timkiem" type="submit" value="Tìm kiếm" name="Timkiem">
            </form>
        </div>
        <div>
            <a href="{{route('themphim')}}" class="them_moi">Thêm Phim</a>  
        </div>
        <form action="{{ route('qlyphim') }}" method="get">
            <label for="month">Tháng</label>
            <input type="number" min="1" max="12" step="1" value="1" name="month" id="month">
            <input class="btn-timkiem" type="submit" value="Lọc" name="locthang">
        </form>
    </div>
    
    <table class="table-nv">
        <thead>
        <tr> 
            <th>Mã phim</th>
            <th>Tên phim</th>
            <th>Thể loại</th>
            <th>Thời lượng</th>
            <th>Ngày khởi chiếu</th>
            <th>Quốc gia</th>
            <th>Đạo diễn</th>
            <th>Năm sản xuất</th>
            <th>Mô tả</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
                @forelse ($data as $phim)
                    <tr>
                        <td>{{$phim->ma_phim}}</td>
                        <td>{{$phim->ten}}</td>
                        <td>{{$phim->ten_the_loai}}</td>
                        <td>{{$phim->thoi_luong}}p </td>
                        <td>{{$phim->ngay_khoi_chieu}}</td>
                        <td>{{$phim->nuoc_san_xuat}}</td>
                        <td>{{$phim->ten_dao_dien}}</td>
                        <td>{{$phim->nam_san_xuat}}</td>
                        <td style='width: 150px;'>{{$phim->mo_ta}}</td>
                        <td class='hanh-dong'>
                            <a href="{{route('suaphim',['ma_phim'=>$row->ma_phim])}}" class='btn btn-sm btn-primary'>Sửa</a> |
                            <form method='post' action = "{{route('xoaphim')}}" onsubmit="return confirm('Bạn có chắc chắn muốn xóa cuốn sách này không?');">
                            <input type='hidden' value='{{$phim->ma_phim}}' name='id'>
                            <input type='submit' class='btn btn-sm btn-danger' value='Xóa'>
                            {{ csrf_field() }}
                        </form>
                        </td>
                    </tr> 
                @empty
                    <tr><td colspan='10'>Không tìm thấy phim nào.</td></tr>
                @endforelse
        </tbody>
    </table>
        <div class="pagination">
            {{ $data->links('pagination::bootstrap-4') }}
        </div>
    </x-qly-layout>
</body>
</html>