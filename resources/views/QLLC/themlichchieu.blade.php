
<head>
<meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Thêm Lịch Chiếu</title>
        <link rel="stylesheet" href="{{asset('css/themlichchieu.css')}}"/>
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

        <table class="table">
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
                    <input type="date" id="ngayChieu" class="form-control form-control-sm" name="ngayChieu" value="">
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
                            $khungGioList = ['08:00', '10:00', '12:00', '14:00', '16:00', '18:00', '20:00', '22:00'];
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
<div style='text-align:center;'><input type='submit' class='btn btn-primary mt-1' value='Lưu'></div>
</form>

</x-qly-layout>