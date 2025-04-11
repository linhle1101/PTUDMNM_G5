<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUẢN LÝ TÀI KHOẢN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/qlynhanvien.css')}}">
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

        <div style='text-align:center;font-weight:bold;color:#black;'><h1>QUẢN LÝ NHÂN VIÊN</h1> </div>
<!--Hiển thị thông báo sau khi thêm dữ liệu thành công -->

<!-- 
        <div class="timkiem_themmoi">
            <div class="timkiem">
                <form action="{{ route('qlynhanvien') }}" method="get">
                <b>Nhân viên:</b> <input class="nhap" list="Tên nhân viên" name="tennv" placeholder="Nhập từ khóa cần tìm" value="{{ request('tennv') }}">
                                    <datalist id="Tên nhân viên">
                                        @foreach($data as $row)
                                            <option value="{{$row->ten_NV}}">
                                        @endforeach
                                    </datalist>
                    <input class="btn-timkiem" type="submit" value="Tìm kiếm" name="Timkiem">
                </form>
            </div>

            <div class="them-nhan-vien">
                <a href="{{route('themnhanvien')}}" class="btn btn-success">Thêm Nhân Viên</a>  
            </div>
        </div>
    -->
    <div class="d-flex justify-content-between align-items-center mb-3" style="padding: 0 50px;">
        <div class="d-flex align-items-center">
            <label for="customSearch" class="me-2 mb-0"><b>Nhân viên:</b></label>
            <input type="text" id="customSearch" class="form-control" placeholder="Nhập từ khóa cần tìm..." style="width: 300px;">
        </div>
        <div>
            <a href="{{route('themnhanvien')}}" class="btn btn-success">Thêm Nhân Viên</a>  
        </div>
    </div>
        <table id = "cgv-table" class="table table-striped table-bordered" width="100%">
            <THEAD style="background-color: darkgray; color: white;">
                <tr> 
                    <th>ID Nhân viên</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Giới tính</th>
                    <th>Số điện thoại</th>
                    <th>Ngày tham gia</th>
                    <th>Hành động</th>
                </tr> 
            </THEAD>
            @forelse ($data as $nhanvien)
            <tr>
                <td>{{$nhanvien->maNV}}</td>
                <td>{{$nhanvien->ten_NV}}</td>
                <td>{{$nhanvien->email}}</td>
                <td>{{$nhanvien->gioitinh}} </td>
                <td>{{$nhanvien->soDienThoai}}</td>
                <td>{{$nhanvien->ngaytao}}</td>
                <td class='hanh-dong'>
                    <a href="{{route('suanhanvien',['maNV'=>$nhanvien->maNV])}}" class='btn btn-sm btn-primary'>Sửa</a>
                    <form method='post' action = "{{route('xoanhanvien')}}" onsubmit="return confirm('Bạn có chắc chắn muốn xóa nhân viên này không?');">
                        <input type='hidden' value='{{$nhanvien->maNV}}' name='id'>
                        <input type='submit' class='btn btn-sm btn-danger' value='Xóa'>
                        {{ csrf_field() }}
                    </form>
                </td>
            </tr> 
            @empty
                <tr><td colspan='10'>Không tìm thấy nhân viên nào.</td></tr>
            @endforelse
        </table>


        <div class="pagination">
            {{ $data->links('pagination::bootstrap-4') }}
        </div>

        <script>
    $(document).ready(function () 
    {
        const table = $('#cgv-table').DataTable({
            responsive: true,
            stateSave: true,
            dom: 't', // Ẩn search bar mặc định
        });

        // Thêm search bar thủ công
        $('#customSearch').on('keyup', function () {
            table.search(this.value).draw();
        });
    });
</script>
     </x-qly-layout>
</body>
</html>