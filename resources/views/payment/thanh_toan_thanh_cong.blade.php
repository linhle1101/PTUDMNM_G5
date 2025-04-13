
<x-app-layout>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="width: 600px;">
            <div class="card-body text-center">
                <h3 class="display-4 text-success">Đặt vé thành công!</h3>

                <h3 class="mt-4">Thông tin khách hàng:</h3>
                <table class="table table-bordered table-striped">
                    <tr>
                        <td><strong>Tên khách hàng:</strong></td>
                        <td><span id="buyerName">{{ $user->name ?? 'Không xác định' }}</span></td>
                    </tr>
                    <tr>
                        <td><strong>Email:</strong></td>
                        <td>{{ $user['email'] }}</td>
                    </tr>
                    <tr>
                        <td><strong>Số điện thoại:</strong></td>
                        <td>{{ $khach_hang['soDienThoai'] }}</td>
                    </tr>
                    
                
                </table>

                <h3 class="mt-4">Thông tin phim:</h3>
                <table class="table table-bordered table-striped">
                    <tr>
                    <td><strong>Tên phim:</strong></td>
                        <td>{{ $phim->ten_phim ?? 'Không xác định' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Thời lượng:</strong></td>
                        <td>{{ $phims->thoi_luong ?? 'Không rõ' }} phút</td>
                    </tr>
                    <tr>
                        <td><strong>Mã vé:</strong></td>
                        <td>{{ $ve_xem_phim->ma_ve ?? 'Không xác định' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Ngày chiếu:</strong></td>
                        <td>{{ $lich_chieu->ngayChieu ?? 'Không rõ' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Ca chiếu:</strong></td>
                        <td>{{ $lich_chieu->caChieu ?? 'Không rõ' }}</td>
                    </tr>
                </table>

                <a href="{{ url('/') }}" class="btn btn-primary mt-4">Quay lại trang chủ</a>
            </div>
        </div>
    </div>
    @push('styles')
    <link rel="stylesheet" href="{{ asset('css/MHTT.css') }}">
@endpush
</x-app-layout>
