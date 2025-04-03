<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>form nhân viên</title>
    <style>
         body label
        {
            font-size:18px;
            font-weight: bold ;
        }
         body input
         {
            padding:10px;
            font-size:14px; 
            height:15px;
         }
    </style>
</head>


<body>
    <x-qly-layout>
        <!--@if ($errors->any())
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
        @endif-->

<!-- code java hiển thị ảnh preview xem trước  -->
        <script> 
            function previewFile() 
                { var preview = document.getElementById('preview'); 
                var file = document.getElementById('file').files[0]; 
                var reader = new FileReader(); 

                reader.addEventListener('load', function () 
                { 
                    preview.src = reader.result; 
                }, false);

                    if (file) 
                    { 
                        reader.readAsDataURL(file); 
                    } 
                } 
        </script>
        @if ($errors->any())
            <div style='color:red; margin:0 auto'>
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
                <div class="body">
                <form action="{{route('nhanviensave',['action'=>$action])}}" method = "post" enctype="multipart/form-data">
                    @if($action=="add")
                    <div style='text-align:center;font-weight:bold;color:#15c;'><h1>THÊM THÔNG TIN NHÂN VIÊN</h1> </div>
                    @else
                    <div style='text-align:center;font-weight:bold;color:#black;'><h1>SỬA THÔNG TIN NHÂN VIÊN</h1></div>
                    @endif

                    <!--
                    <label style="font-size:18px; font-weight: bold ;">Mã nhân viên</label><br>
                    <input style="padding:10px; font-size:14px; height:15px;" type='text' class='form-control form-control-sm' name='maNV' disabled value="{{$nhanvien->maNV??''}}">
                    <input type='hidden' name='maNV' value="{{$nhanvien->maNV??''}}"><br>

                    <label style="font-size:18px; font-weight: bold ;">Tên nhân viên</label><br>
                    <input style="padding:10px; font-size:14px; height:15px;" type='text' class='form-control form-control-sm' name='ten_NV' value="{{$nhanvien->ten_NV??''}}"><br>

                    <label style="font-size:18px; font-weight: bold ;">Email</label><br>
                    <input style="padding:10px; font-size:14px; height:15px;" type='text' class='form-control form-control-sm' name='email' value="{{$nhanvien->email??''}}"><br>

                    <label style="font-size:18px; font-weight: bold ;">Giới tính</label><br>
                    <input style="padding:10px; font-size:14px; height:15px;" type='text' class='form-control form-control-sm' name='gioitinh' value="{{$nhanvien->gioitinh??''}}"><br>

                    <label style="font-size:18px; font-weight: bold ;">CCCD</label><br>
                    <input style="padding:10px; font-size:14px; height:15px;" type='text' class='form-control form-control-sm' name='cccd' value="{{$nhanvien->cccd??''}}"><br>

                    <label style="font-size:18px; font-weight: bold ;">Dân tộc</label><br>
                    <input style="padding:10px; font-size:14px; height:15px;" type='text' class='form-control form-control-sm' name='dantoc' value="{{$nhanvien->dantoc??''}}"><br>

                    <label style="font-size:18px; font-weight: bold ;">Ngày Sinh</label><br>
                    <input style="padding:10px; font-size:14px; height:15px;" type='date' class='form-control form-control-sm' name='ngaysinh' value="{{$nhanvien->ngaysinh??''}}"><br>

                    <label style="font-size:18px; font-weight: bold ;">Số Điện Thoại</label><br>
                    <input style="padding:10px; font-size:14px; height:15px;" type='text' class='form-control form-control-sm' name='soDienThoai' value="{{$nhanvien->soDienThoai??''}}"><br>

                    <label style="font-size:18px; font-weight: bold ;">Địa Chỉ Thường Trú</label><br>
                    <input style="padding:10px; font-size:14px; height:15px;" type='text' class='form-control form-control-sm' name='diachithuongtru' value="{{$nhanvien->diachithuongtru??''}}"><br>

                    <label style="font-size:18px; font-weight: bold ;">Địa Chỉ Tạm Trú</label><br>
                    <input style="padding:10px; font-size:14px; height:15px;" type='text' class='form-control form-control-sm' name='diachitamtru' value="{{$nhanvien->diachitamtru??''}}"><br>

                    <label style="font-size:18px; font-weight: bold ;">Ngày tham gia</label><br>
                    <input style="padding:10px; font-size:14px; height:15px;" type='date' class='form-control form-control-sm' name='ngaytao' value="{{$nhanvien->ngaytao??''}}"><br>

                    <label style="font-size:18px; font-weight: bold ;">Ảnh đại diện</label><br>
                    @if($action=="edit")
                    <img src="{{asset('storage/nhanvien_images/'.$nhanvien->file_hinhanh) }}" width="50px" class='mb-1'/>
                    <input style="float:left; margin-left:50px; align-ietm: center; margin-top:20px;" type ='hidden' value='{{$nhanvien->maNV}}' name='maNV'>
                    @endif
                    <input type="file" name="file_hinhanh" accept="image/*" class="form-control-file">
                    {{ csrf_field() }}
            -->
                <div >
                    <label> Mã nhân viên </label><br>
                    <input type='text' class='form-control form-control-sm' name='maNV' disabled value="{{$nhanvien->maNV??''}}">
                    <input type='hidden' name='maNV' value="{{$nhanvien->maNV??''}}"><br>

                    <label> Tên nhân viên </label><br>
                    <input type='text' class='form-control form-control-sm' name='ten_NV' value="{{$nhanvien->ten_NV??''}}"><br>

                    <label> Email </label><br>
                    <input type='text' class='form-control form-control-sm' name='email' value="{{$nhanvien->email??''}}"><br>

                    <label> Giới tính </label><br>
                    <input type='text' class='form-control form-control-sm' name='gioitinh' value="{{$nhanvien->gioitinh??''}}"><br>

                    <label> CCCD </label><br>
                    <input type='text' class='form-control form-control-sm' name='cccd' value="{{$nhanvien->cccd??''}}"><br>

                    <label> Dân tộc </label><br>
                    <input type='text' class='form-control form-control-sm' name='dantoc' value="{{$nhanvien->dantoc??''}}"><br>

                    </div>
                    
                    <div>
                    <label> Ngày Sinh </label><br>
                    <input type='date' class='form-control form-control-sm' name='ngaysinh' value="{{$nhanvien->ngaysinh??''}}"><br>

                    <label> Số Điện Thoại </label><br>
                    <input type='text' class='form-control form-control-sm' name='soDienThoai' value="{{$nhanvien->soDienThoai??''}}"><br>

                    <label> Địa Chỉ Thường Trú </label><br>
                    <input type='text' class='form-control form-control-sm' name='diachithuongtru' value="{{$nhanvien->diachithuongtru??''}}"><br>

                    <label> Địa Chỉ Tạm Trú </label><br>
                    <input type='text' class='form-control form-control-sm' name='diachitamtru' value="{{$nhanvien->diachitamtru??''}}"><br>

                    <label> Ngày tham gia </label><br>
                    <input type='date' class='form-control form-control-sm' name='ngaytao' value="{{$nhanvien->ngaytao??''}}"><br>

                    <label> Ảnh đại diện </label><br>
                    @if($action=="edit")
                        <img src="{{asset('storage/nhanvien_images/'.$nhanvien->file_hinhanh) }}" width="50px" class='mb-1'/>
                        <input type='hidden' value='{{$nhanvien->maNV}}' name='maNV'>
                    @endif
                    <input type="file" name="file_hinhanh" accept="image/*" class="form-control-file">
                    {{ csrf_field() }}
                </div>
                        <div style='text-align:center;'><input type='submit' class='btn btn-primary mt-1' value='Lưu'></div>
                    </form>
            </div> 
    </x-qly-layout>
</body>
</html>