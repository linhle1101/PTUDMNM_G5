<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin</title>
    <link rel="stylesheet" href="./AddFilm.css"/>

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

            <h1>QUẢN LÝ NHÂN VIÊN</h1>
            <div class="panel panel-default" style="width:50%; margin:0 auto;">
                <div class="panel-body">
                <form action="{{route('nhanviensave',['action'=>$action])}}" method = "post" enctype="multipart/form-data">
                    @if($action=="add")
                    <div style='text-align:center;font-weight:bold;color:#15c;'>THÊM THÔNG TIN NHÂN VIÊN </div>
                    @else
                    <div style='text-align:center;font-weight:bold;color:#15c;'>SỬA THÔNG NHÂN VIÊN</div>
                    @endif

                    <label>Mã nhân viên</label>
                    <input type='text' class='form-control form-control-sm' name='maNV' disable value="{{$nhanvien->maNV??''}}">
                    <label>Tên nhân viên</label>
                    <input type='text' class='form-control form-control-sm' name='ten_NV' value="{{$nhanvien->ten_NV??''}}">
                    <label></label>
                    <input type='text' class='form-control form-control-sm' name='nha_cung_cap' value="{{$sach->nha_cung_cap??''}}">
                    <label>Tác giả</label>
                    <input type='text' class='form-control form-control-sm' name='tac_gia' value="{{$sach->tac_gia??''}}">
                    <label>Hình thức bìa</label>
                    <input type='text' class='form-control form-control-sm' name='hinh_thuc_bia' value="{{$sach->hinh_thuc_bia??''}}">
                    <label>Giá bán</label>
                    <input type='text' class='form-control form-control-sm' name='gia_ban' value="{{$sach->gia_ban??''}}">
                    <label>Thể loại</label>
                    <select name='the_loai' class='form-control form-control-sm'>
                    @php
                    $selected = isset($sach->the_loai)?$sach->the_loai:"";
                    @endphp
                    @foreach($the_loai as $row)
                    <option value='{{$row->id}}' {{$selected==$row->id?'selected':''}}>
                    {{$row->ten_the_loai}}
                    </option>
                    @endforeach
                    </select>
                    <label>Ảnh đại diện</label><br>
                    @if($action=="edit")
                    <img src="{{asset('storage/book_image/'.$sach->file_anh_bia) }}" width="50px" class='mb-1'/>
                    <input type ='hidden' value='{{$sach->id}}' name='id'>
                    @endif
                    <input type="file" name="file_anh_bia" accept="image/*" class="form-control-file">
                    {{ csrf_field() }}
                    <div style='text-align:center;'><input type='submit' class='btn btn-primary mt-1' value='Lưu'></div>
                </form>
                </div>
            </div>   
    </x-qly-layout>
    
</body>
</html>