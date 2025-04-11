<x-app-layout>

    <h1>Lịch sử giao dịch</h1>
    <table>
        <thead>
            <tr>
                <th>Mã vé</th>
                <th>Phòng Chiếu</th>
                <th>Ngày chiếu</th>
                <th>Giờ chiếu</th>
                <th>Giá vé</th>
                <th>Ngày đặt</th>
                <th>Trạng thái vé</th>
                <th>Tên Phim</th>
                <th>Mã ghế</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactionHistories as $history)
                <tr>
                    <td>{{ $history->ma_ve }}</td>
                    <td>{{ $history->phong_chieu }}</td>
                    <td>{{ $history->ngayChieu }}</td>
                    <td>{{ $history->gioChieu }}</td>
                    <td>{{ $history->gia_ve }}</td>
                    <td>{{ $history->ngay_dat_ve }}</td>
                    <td>{{ $history->trang_thai_ve }}</td>
                    <td>{{ $history->phim }}</td>
                    <td>{{ $history->ma_ghe }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>