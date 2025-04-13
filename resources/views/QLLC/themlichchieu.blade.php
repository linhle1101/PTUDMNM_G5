
<head>
    <style>
        
        .form-container {
    width: 70%; /* Tăng chiều rộng của form */
    margin: 50px auto;
    padding: 30px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
    text-align: left;
}

/* Tiêu đề */
h2 {
    text-align: center;
    color:rgb(8, 8, 8);
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: bold;
}

/* Bảng */
.bang {
    width: 100%; /* Chiếm toàn bộ chiều rộng của container */
    border-collapse: collapse;
    margin-top: 20px;
}

.bang th, .bang td {
    padding: 15px; /* Tăng khoảng cách bên trong ô */
    text-align: left;
    vertical-align: center;
    font-size: 20px;
    padding-right: 1px; /* Thêm khoảng cách bên trái */
}

.bang th {
    width: 20%; /* Cột tiêu đề chiếm 30% */
    font-weight: bold;
    color: #333;
}

.bang td {
    width: 70%; /* Cột nội dung chiếm 70% */
}

/* Input / Select / Date */
input[type="text"],
input[type="date"],
select {
    width: 100%; /* Chiếm toàn bộ chiều rộng của cột */
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

/* Suất chiếu (2 cột) */
.suat-chieu-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Chia thành 2 cột */
    gap: 15px; /* Khoảng cách giữa các ô */
    margin-top: 10px;
}

.suat-chieu-container .form-check {
    display: flex;
    align-items: center; /* Căn giữa theo chiều dọc */
    justify-content: center; /* Căn giữa theo chiều ngang */
    align-items: center;
    background: #f9f9f9;
    padding: 14px;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    padding: 10px;
}

.suat-chieu-container .form-check:hover {
    background-color: #f1f1f1;
}

.suat-chieu-container .form-check-input {
    margin-right: 20px;
    margin-left: 10px;
    appearance: none; /* Loại bỏ giao diện mặc định của radio button */
    width: 20px;
    height: 20px;
    border: 1px solid rgb(5, 10, 16); /* Màu viền */
    border-radius: 50%; /* Tạo hình tròn */
    outline: none;
    cursor: pointer;
    transition: background-color 0.3s ease, border-color 0.3s ease;

}


.suat-chieu-container .form-check-label {
    font-size: 14px;
    color: #333;
}


.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 15px;
    border-radius: 5px;
    text-decoration: none;
    color: white;
    margin: 5px;
    cursor: pointer;
}

.btn-primary {
    background-color: #007bff;
    border: none;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-secondary {
    background-color: #6c757d;
    border: none;
}

.btn-secondary:hover {
    background-color: #5a6268;
}

/* Hộp thông báo lỗi */
.error-box {
    color: red;
    background: #ffecec;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
}

/* Hộp thông báo thành công */
.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
}
    </style>
<meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Thêm Lịch Chiếu</title>
</head>
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
<div class="form-container">
    <h2>CẬP NHẬT LỊCH CHIẾU PHIM</h2>
    <form method="post" action="{{route('them')}}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <table class="bang">
            <tr>
                <th><label for="ma_phim">Mã phim</label></th>
                <td>
                    <select name="ma_phim" id="ma_phim" class="form-control form-control-sm">
                        <option value="">Chọn mã phim</option>
                        @foreach ($phimList as $phim)
                            <option value="{{ $phim->ma_phim }}">
                                {{ $phim->ma_phim }} - {{ $phim->ten }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="ngayChieu">Ngày chiếu</label></th>
                <td>
                    <input type="date" id="ngayChieu" class="form-control form-control-sm" name="ngayChieu" value=""  min="{{ date('Y-m-d') }}">
                </td>
            </tr>
            <tr>
                <th><label for="maPhongChieuPhim">Phòng chiếu</label></th>
                <td>
                    <select name="maPhongChieuPhim" id="maPhongChieuPhim" class="form-control form-control-sm">
                        <option value="">Chọn phòng chiếu</option>
                        @foreach ($phongChieuList as $phongChieu)
                            <option value="{{ $phongChieu->maPhongChieu }}">
                                {{ $phongChieu->maPhongChieu }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th><label>Suất chiếu</label></th>
                <td>
                    <div class="suat-chieu-container">
                        @php
                            $khungGioList = ['08:00', '10:00', '12:00', '14:00', '16:00', '18:00', '20:00', '22:00','23:00'];
                            $suatChieuHienTai = $caChieu ? explode(',', $caChieu) : [];
                        @endphp

                        @foreach ($khungGioList as $khungGio)
                            <div class="form-check">
                                <input 
                                    type="radio" 
                                    class="form-check-input" 
                                    name="caChieu[]" 
                                    value="{{ $khungGio }}" 
                                    {{ in_array($khungGio, $suatChieuHienTai) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $khungGio }}</label>
                            </div>
                        @endforeach
                    </div>
                </td>
                
                    
              
            </tr>
        </table>
</div>
{{ csrf_field() }}
<div style="text-align: center; margin-top: 10px;">
    <a href="{{ route('lichChieu') }}" class="btn btn-secondary">Hủy</a>
    <input type="submit" class="btn btn-primary mt-1" value="Lưu">
</div>
</form>

</x-qly-layout>