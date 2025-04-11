<x-app-layout>

    <h1 class="page-title">Lịch sử giao dịch</h1>
    <table class="transaction-history-table">
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




<style>
    .page-title {
        text-align: center;
        font-size: 30px;
        font-weight: bold;
        color: #333;
        margin-top: 20px;
    }

    .transaction-history-table {
        width: 90%;
        margin: 0 auto;
        border-collapse: collapse;
        margin-top: 30px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .transaction-history-table th,
    .transaction-history-table td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
    }

    .transaction-history-table th {
        background-color: #f4f4f4;
        color: #333;
        font-size: 16px;
    }

    .transaction-history-table td {
        font-size: 14px;
        color: #555;
    }

    .transaction-history-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .transaction-history-table tr:hover {
        background-color: #f1f1f1;
        cursor: pointer;
    }

    .transaction-history-table th:first-child,
    .transaction-history-table td:first-child {
        border-left: none;
    }

    .transaction-history-table th:last-child,
    .transaction-history-table td:last-child {
        border-right: none;
    }

    /* For smaller screens */
    @media screen and (max-width: 768px) {
        .transaction-history-table {
            width: 100%;
        }

        .transaction-history-table th,
        .transaction-history-table td {
            font-size: 12px;
            padding: 8px;
        }
    }
</style>
