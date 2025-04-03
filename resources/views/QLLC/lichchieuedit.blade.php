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
<form method = 'post' action="{{route('saveedit')}}" enctype="multipart/form-data"
style='width:30%; margin:0 auto'>
<div style='text-align:center;font-weight:bold;color:#15c;'>CẬP NHẬT LỊCH CHIẾU PHIM</div>
<label>Mã lịch chiếu</label>
<input type='text' class='form-control form-control-sm' name='maLichChieuPhim' value="{{$cgv->maLichChieuPhim}}" disabled>
<input type ='hidden' value='{{$cgv->maLichChieuPhim}}' name='maLichChieuPhim'>
<label>Mã phim</label>
<input type='text' class='form-control form-control-sm' name='ma_phim' value="{{$cgv->ma_phim}}"readonly>
<input type ='hidden' value='{{$cgv->maLichChieuPhim}}' name='maLichChieuPhim'>
<label>Tên phim</label>
<input type='text' class='form-control form-control-sm' name='ten' value="{{$cgv->ten}}"readonly>
<input type ='hidden' value='{{$cgv->maLichChieuPhim}}' name='maLichChieuPhim'>
<label>Ngày chiếu</label>
<input type='date' class='form-control form-control-sm' name='ngayChieu' value="{{$cgv->ngayChieu}}">
<input type ='hidden' value='{{$cgv->maLichChieuPhim}}' name='maLichChieuPhim'>
<label>Phòng chiếu</label>
<select name='maPhongChieuPhim' class='form-control form-control-sm'>
    <option value=''>Chọn phòng chiếu</option>
    @foreach ($phongChieuList as $phongChieu)
        <option value="{{ $phongChieu->maPhongChieu }}" 
            {{ $phongChieu->maPhongChieu == $cgv->maPhongChieuPhim ? 'selected' : '' }}>
            {{ $phongChieu->maPhongChieu }}
        </option>
    @endforeach
</select>
<label>Suất chiếu</label>
<div class="form-group">
    @php
        // Danh sách các khung giờ có sẵn
        $khungGioList = ['08:00', '10:00', '12:00', '14:00', '16:00', '18:00', '20:00', '22:00'];
        // Tách các suất chiếu hiện tại từ cơ sở dữ liệu (nếu có)
        $suatChieuHienTai = explode(',', $cgv->caChieu); // Giả sử caChieu lưu dạng chuỗi "08:00,10:00"

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