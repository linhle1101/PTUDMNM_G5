<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/upd_add_nv.css')}}">
    
    <title>form nhân viên</title>
    <style>
         body label
        {
            font-size:16px;
            font-weight: bold ;
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
                    <div style='text-align:center;font-weight:bold;color:#black;'><h1>THÊM THÔNG TIN NHÂN VIÊN</h1> </div>
                    @else
                    <div style='text-align:center;font-weight:bold;color:#black;'><h1>SỬA THÔNG TIN NHÂN VIÊN</h1></div>
                    @endif
                <div>
                    <table class="table">
                        <tr>
                            <th><label>Mã nhân viên</label></th>
                            <td><input type='text'  name='maNV' disabled value="{{$nhanvien->maNV??''}}">
                                <input type='hidden' name='maNV' value="{{$nhanvien->maNV??''}}"><br></td>
                            <td></td>
                            
                            <th><label>Tên nhân viên</label></th>
                            <td><input type='text' name='ten_NV' value="{{$nhanvien->ten_NV??''}}"></td>
                            <td rowspan="5" style="vertical-align: top; text-align: left;"><label>Ảnh đại diện</label><br>
                                        @if($action=="edit")
                                            <img src="{{asset('storage/nhanvien_images/'.$nhanvien->file_hinhanh) }}" width="150px" class='mb-1'/>
                                            <input type='hidden' value='{{$nhanvien->maNV}}' name='maNV'>
                                        @endif
                                        <input type="file" name="file_hinhanh" id="file" accept="image/*" onchange="previewFile()"><br>
                                    <p></p>
                            </td>
                        </tr>

                        <tr>
                            <th><label>Email</label></th>
                            <td><input type='text' name='email' value="{{$nhanvien->email??''}}"></td>
                            <td></td>
                            
                            <th><label>Giới tính</label></th>
                            <td>
                                <select name="gioitinh" class="form-control">
                                    <option value="Nam" {{ (isset($nhanvien) && $nhanvien->gioitinh == 'Nam') ? 'selected' : '' }}>Nam</option>
                                    <option value="Nữ" {{ (isset($nhanvien) && $nhanvien->gioitinh == 'Nữ') ? 'selected' : '' }}>Nữ</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th><label>CCCD</label></th>
                            <td><input type='text' name='cccd' value="{{$nhanvien->cccd??''}}"></td>
                            <td></td>
                            
                            <th><label>Dân tộc</label></th>
                            <td><input type='text' name='dantoc' value="{{$nhanvien->dantoc??''}}"></td>
                        </tr>

                        <tr>
                            <th><label>Ngày sinh</label></th>
                            <td><input type='date' name='ngaysinh' value="{{$nhanvien->ngaysinh??''}}"></td>
                            <td></td>
                            
                            <th><label>Số điện thoại</label></th>
                            <td><input type='text' name='soDienThoai' value="{{$nhanvien->soDienThoai??''}}"></td>
                        </tr>

                        <tr>
                            <th><label>Ngày tham gia</label></th>
                                <td><input type='date' name='ngaytao' value="{{$nhanvien->ngaytao ?? now()->format('Y-m-d') }}"></td>
                                <td></td>
                            
                            <th><label>Địa chỉ tạm trú</label></th>
                            <td><input type='text' name='diachitamtru' style="height: 50px;" value="{{$nhanvien->diachitamtru??''}}"></td>
                        </tr>

                        <tr>
                            
                            <th><label>Địa chỉ thường trú</label></th>
                            <td><input type='text' name='diachithuongtru' style="height: 50px;" value="{{$nhanvien->diachithuongtru??''}}"></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                         <div style='text-align:center;'>
                         <button type="submit" class="btn btn-success">Lưu</button>
                         </div> 
                         {{ csrf_field() }}  
        </form>
            </div> 
    </x-qly-layout>
</body>
</html>