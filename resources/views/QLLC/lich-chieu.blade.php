<html>
<head>
    <!-- Thêm vào <head> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
<x-qly-layout>
   
        <div style='text-align:center; color:#15c; font-w; font-size:20peight:boldx;'>QUẢN LÝ LỊCH CHIẾU</div>
    <a href="{{route('themlichchieu')}}" class='btn btn-sm btn-success mb-1'>Thêm lịch chiếu</a>
    <form action="{{ route('lichChieu') }}" method="get" style="display: flex; align-items: center; justify-content: flex-end; margin-bottom: 20px;">
    <input type="date" name="loc_dl" value="{{ request('loc_dl') }}" style="padding: 5px; margin-right: 10px;">
    <button type="submit" style="padding: 5px 10px; background-color: #007bff; color: white; border: none; border-radius: 5px;">Lọc</button>
</form>
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
        @forelse($data as $row)
            @php
                // Kiểm tra ngày chiếu có nằm trong khoảng từ ngày sau một tuần đến ngày sau hai tuần
                $showButtons = ($row->ngayChieu >= $dateAfterOneWeek->format('Y-m-d') && $row->ngayChieu <= $dateAfterTwoWeeks->format('Y-m-d'));
            @endphp
        <tr>
            <td >{{$row->maLichChieuPhim}}</td>
            <td>{{$row->ma_phim}}</td>
            <td>{{$row->ten}}</td>
            <td>{{$row->ngayChieu}}</td>
            <td>{{$row->maPhongChieuPhim}}</td>
            <td>{{$row->caChieu}}</td>       
            <td>
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
        @empty
        <tr>
            <td colspan="6" style="text-align: center;">Không tìm thấy lịch chiếu</td>
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