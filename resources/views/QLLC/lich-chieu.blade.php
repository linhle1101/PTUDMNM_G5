<html>
<head>
    <!-- Thêm vào <head> -->
    <link rel="stylesheet" href="{{ asset('css/qllc.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
   /* Nút Thêm lịch chiếu và Lọc */
.btn-add, .btn-filter {
    display: inline-block;
    background-color: #28a745; /* Màu xanh */
    color: white;
    padding: 8px 12px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 14px;
    border: none;
    cursor: pointer;
    margin-top: 10px;
}
.btn-add{
    margin-left: 10px;
    
}

.btn-add:hover, .btn-filter:hover {
    background-color: #218838; /* Màu xanh đậm hơn khi hover */
}

/* Input ngày trong form Lọc */
form[action*="lichChieu"] input[type="date"] {
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-right: 10px;
    font-size: 14px;
}
   /* Căn chỉnh bảng */
#cgv-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    font-size: 14px;
    text-align: center;
    z-index: 1;
}

/* Định dạng tiêu đề bảng */
#cgv-table thead th {
    background-color:rgb(193, 188, 189);
    color: white;
    padding: 10px;
    border: 1px solid #ddd;
}

/* Định dạng các hàng trong bảng */
#cgv-table tbody tr {
    border: 1px solid #ddd;
}

#cgv-table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

#cgv-table tbody tr:hover {
    background-color: #f1f1f1;
}

/* Định dạng ô trong bảng */
#cgv-table td {
    padding: 10px;
    border: 1px solid #ddd;
}


/* Định dạng thông báo khi không có dữ liệu */
table tbody tr td[colspan="7"] {
    font-style: italic;
    color: #999;
    text-align: center;
    padding: 20px;
}
.hanh-dong a 
{
    text-decoration: none;
    color:#000;
}

.hanh-dong a:hover
{
    text-decoration: underline;
}
.hanh-dong {
    white-space: nowrap; /* Ngăn chặn xuống dòng */
    align-items: center; /* Căn giữa theo chiều dọc */
    gap: 5px; /* Tạo khoảng cách giữa các nút */
}
.hanh-dong form {
    display: inline-block; /* Giúp form không bị xuống dòng */
    margin: 0; /* Loại bỏ margin thừa */
}
</style>
</head>
<body>
<x-qly-layout>
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <!-- Nút Thêm lịch chiếu -->
    <a href="{{route('themlichchieu')}}" class="btn-add">Thêm lịch chiếu</a>

    <!-- Form Lọc -->
    <form action="{{ route('lichChieu') }}" method="get" style="display: flex; align-items: center;">
        <input type="date" name="loc_dl" value="{{ request('loc_dl') }}" style="padding: 5px; margin-right: 10px; margin-top:10px;">
        <button type="submit" class="btn-filter">Lọc</button>
    </form>
</div>

    <table id = "cgv-table" class="table table-striped table-bordered" width="100%">
        <thead>
            <tr>
            <th>Mã lịch chiếu</th> 
            <th>Mã phim</th>
            <th>Tên phim</th>
            <th>Ngày chiếu</th>
            <th>Phòng chiếu</th>
            <th>Suất chiếu</th>
            <th> </th>
        </tr>   
        </thead>
        <tbody>
        @forelse($data as $row)
            @php
                // Kiểm tra ngày chiếu có nằm trong khoảng từ ngày sau một tuần đến ngày sau hai tuần
                $showButtons = ($row->ngayChieu > $dateAfterOneWeek->format('Y-m-d'));
            @endphp
        <tr>
            <td >{{$row->maLichChieuPhim}}</td>
            <td>{{$row->ma_phim}}</td>
            <td>{{$row->ten}}</td>
            <td>{{$row->ngayChieu}}</td>
            <td>{{$row->maPhongChieuPhim}}</td>
            <td>{{$row->caChieu}}</td>       
          
        <td class="hanh-dong">
            @if ($showButtons)
                <div class="btn-group">
                    <a href="{{route('lichchieuedit',['maLichChieuPhim'=>$row->maLichChieuPhim])}}" class='btn btn-sm btn-primary'>Sửa</a>
                    &nbsp;
                    <form method='post' action = "{{route('lichchieudelete')}}" onsubmit="return confirm('Bạn có chắc chắn muốn xóa lịch chiếu này không?');">
                        <input type='hidden' value='{{$row->maLichChieuPhim}}' name='maLichChieuPhim'>
                        <input type='submit' class='btn btn-sm btn-danger' value='Xóa'>
                        {{ csrf_field() }}
                    </form>
                </div>
                    @else
                       <span>không được điều chỉnh lịch chiếu</span>
                    @endif
            </td>  
        </tr> 
        @empty
        <tr>
            <td colspan="7" style="text-align: center;">Không tìm thấy lịch chiếu</td>
        </tr>
        @endforelse
        
        </tbody>
    </table>
    <div style="margin-top: 20px;">
    Tổng số lịch chiếu: {{ $total }}
    
</div>
<script>
$(document).ready(function() {
    $('#cgv-table').DataTable({
        responsive: true,
        stateSave: true
    });
});
</script>
</x-qly-layout>
</body>
</html>