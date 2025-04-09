@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4" style="width: 600px;">
        <div class="card-body text-center">
            <h1 class="display-4 text-success">Thanh toán thành công!</h1>

            <h3 class="mt-4">Thông tin khách hàng:</h3>
            <table class="table table-bordered table-striped">
                <tr>
                    <td><strong>Tên khách hàng:</strong></td>
                    <td>{{ $khach_hang['hoTen'] }}</td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td>{{ $khach_hang['email'] }}</td>
                </tr>
                <tr>
                    <td><strong>Số điện thoại:</strong></td>
                    <td>{{ $khach_hang['soDienThoai'] }}</td>
                </tr>
                <tr>
                    <td><strong>Ngày sinh:</strong></td>
                    <td>{{ $khach_hang['ngaysinh'] }}</td>
                </tr>
            </table>

            <h3 class="mt-4">Thông tin phim:</h3>
            <table class="table table-bordered table-striped">
                <tr>
                    <td><strong>Tên phim:</strong></td>
                    <td>{{ $movie['ten'] }}</td>
                </tr>
                <tr>
                    <td><strong>Thời lượng:</strong></td>
                    <td>{{ $movie['thoi_luong'] }}</td>
                </tr>
                <tr>
                    <td><strong>Đạo diễn:</strong></td>
                    <td>{{ $movie['ten_dao_dien'] }}</td>
                </tr>
                <tr>
                    <td><strong>Ngày khởi chiếu:</strong></td>
                    <td>{{ $movie['ngay_khoi_chieu'] }}</td>
                </tr>
            </table>

            <h3 class="mt-4">Tổng số tiền thanh toán:</h3>
            <p><strong>{{ number_format($tong_tien_ve, 0, ',', '.') }} ₫</strong></p>

            <a href="{{ url('/') }}" class="btn btn-primary mt-4">Quay lại trang chủ</a>
        </div>
    </div>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/stylestt.css') }}">
@endpush
