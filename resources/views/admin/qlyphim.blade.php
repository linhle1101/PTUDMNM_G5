<html>
<head>
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
    <div style='text-align:center; color:#d22121; font-weight:bold; font-size:30px; padding: 10px;'>QUẢN LÝ PHIM</div>
    <div class="timkiem_themmoi">
            <a href="{{route('themphim')}}" class="them_moi">Thêm Phim</a>  
        <form action="{{ route('qlyphim') }}" method="get" class="timkiem">
            Tháng: <input type="number" style="height: 25px" min="1" max="12" step="1" name="month" id="month" value="{{ request('month', 1)}}">
            <input class="btn-timkiem" type="submit" value="Lọc" name="locthang">
        </form>
    </div>
    <table id = "cgv-table" class="table table-striped table-bordered" width="95%">
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
        </tbody>
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
                            <a href="{{route('suaphim',['id'=>$phim->ma_phim])}}" class='btn btn-sm btn-primary'>Sửa</a> |
                            <form method='post' action = "{{route('xoaphim')}}" onsubmit="return confirm('Bạn có chắc chắn muốn xóa phim này không?');">
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
    <div style="margin-top: 20px;">
        Tổng số phim: {{ $total }}
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