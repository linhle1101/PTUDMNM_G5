@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lịch sử giao dịch</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Mã vé</th>
                    <th>Phòng chiếu</th>
                    <th>Ngày chiếu</th>
                    <th>Giờ chiếu</th>
                    <th>Giá vé</th>
                    <th>Ngày đặt vé</th>
                    <th>Trạng thái</th>
                    <th>Phim</th>
                    <th>Mã ghế</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lichSuGiaoDich as $item)
                    <tr>
                        <td>{{ $item->ma_ve }}</td>
                        <td>{{ $item->phong_chieu }}</td>
                        <td>{{ $item->ngay_chieu }}</td>
                        <td>{{ $item->gio_chieu }}</td>
                        <td>{{ $item->gia_ve }}</td>
                        <td>{{ $item->ngay_dat_ve }}</td>
                        <td>{{ $item->trang_thai_ve }}</td>
                        <td>{{ $item->phim }}</td>
                        <td>{{ $item->ma_ghe }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
