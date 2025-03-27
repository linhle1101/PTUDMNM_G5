<html>
<head>
    <!-- Thêm vào <head> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
<x-qly-layout>
   
        <div style='text-align:center; color:#15c; font-weight:bold; font-size:20px;'>QUẢN LÝ LỊCH CHIẾU</div>
    <a href="{{route('xemlichchieu')}}" class='btn btn-sm btn-success mb-1'>điều chỉnh</a>
    <table id = "cgv-table" class="table table-striped table-bordered" width="100%">
        <thead>
            <tr>
            <th>Mã lịch chiếu</th> 
            <th>Mã phim</th>
            <th>Tên phim</th>
            <th>Ngày chiếu</th>
            <th>Phòng chiếu</th>
            <th>Suất chiếu</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td >{{$row->maLichChieuPhim}}</td>
                <td>{{$row->ma_phim}}</td>
                <td>{{$row->ten}}</td>
                <td>{{$row->ngayChieu}}</td>
                <td>{{$row->maPhongChieuPhim}}</td>
                <td>{{$row->caChieu}}</td>
            </tr>
                <td>
                    <div class="btn-group">
                        <a href="#" class='btn btn-sm btn-primary'>Sửa</a>
                        &nbsp;
                        <form method='post' action = "#" onsubmit="return confirm('Bạn có chắc chắn muốn xóa cuốn sách này không?');">
                            <input type='hidden' value='{{$row->id}}' name='id'>
                            <input type='submit' class='btn btn-sm btn-danger' value='Xóa'>
                            {{ csrf_field() }}
                        </form>
                    </div>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
 
</x-qly-layout>
</body>
</html>