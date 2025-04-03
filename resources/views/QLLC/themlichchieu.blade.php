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
<form method = 'post' action="{{route('them')}}" enctype="multipart/form-data"
style='width:30%; margin:0 auto'>
<div style='text-align:center;font-weight:bold;color:#15c;'>CẬP NHẬT LỊCH CHIẾU PHIM</div>
<input type='hidden' name='maLichChieuPhim' value="">
<label>Mã phim</label>
<select name="ma_phim" class="form-control form-control-sm">
    <option value="">Chọn mã phim</option>
    @foreach ($phimList as $phim)
        <option value="{{ $phim->ma_phim }}">
            {{ $phim->ma_phim }} - {{ $phim->ten }}
        </option>
    @endforeach
</select>
<label>Ngày chiếu</label>
<input type='date' class='form-control form-control-sm' name='ngayChieu' value="">
<label>Phòng chiếu</label>
<select name='maPhongChieuPhim' class='form-control form-control-sm'>
    <option value=''>Chọn phòng chiếu</option>
    @foreach ($phongChieuList as $phongChieu)
    <option value="{{ $phongChieu->maPhongChieu }}">
    {{ $phongChieu->maPhongChieu }}
    @endforeach
</select>
<label>Suất chiếu</label>
<div class="form-group">
    @php
        // Danh sách các khung giờ có sẵn
        $khungGioList = ['08:00', '10:00', '12:00', '14:00', '16:00', '18:00', '20:00', '22:00'];
        // Tách các suất chiếu hiện tại từ cơ sở dữ liệu (nếu có)
        $suatChieuHienTai =$caChieu ? explode(',', $caChieu) : []; // Giả sử caChieu lưu dạng chuỗi "08:00,10:00"
    @endphp

    @foreach ($khungGioList as $khungGio)
        <div class="form-check">
            <input 
                type="checkbox" 
                class="form-check-input" 
                name="caChieu[]" 
                value="{{ $khungGio }}" 
                {{ in_array($khungGio, $suatChieuHienTai) ? 'checked' : '' }}>
            <label class="form-check-label">{{ $khungGio }}</label>
        </div>
    @endforeach
</div>
{{ csrf_field() }}
<div style='text-align:center;'><input type='submit' class='btn btn-primary mt-1' value='Lưu'></div>
<style>
        .form-container {
            width: 40%;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #15c;
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .error-box {
            color: red;
            background: #ffecec;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
       
       
    </style>
</form>

</x-qly-layout>