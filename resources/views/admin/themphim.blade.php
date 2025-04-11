<!DOCTYPE html>
<html lang="vi"> 
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Thêm Phim</title>
        <link rel="stylesheet" href="{{asset('css/AddFilm.css')}}"/>
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
                
    <script> 
    function previewFile() { var preview = document.getElementById('preview'); 
    var file = document.getElementById('file').files[0]; 
    var reader = new FileReader(); 

    reader.addEventListener('load', function () { 
        preview.src = reader.result; 
    }, false);

        if (file) { 
            reader.readAsDataURL(file); 
        } 
    } 
    </script>
    <div class="add">
        <h1>QUẢN LÝ PHIM</h1>
        <form action="{{route('addmovie')}}" method="post" enctype="multipart/form-data"><table class="table-add">
            <tr>
                <th><label>Mã phim</label></th>
                <td><input type="text" disabled></td>
                <td></td>
                <th><label>Ngày khởi chiếu</label></th>
                <td><input type="date" name="ngay_khoi_chieu"></td>
                <td rowspan="5"> 
                        
                        <img id="preview" src="" alt="Hình ảnh" style="max-width: 200px;"><br>
                        <label for="file" >Chọn tệp:</label> 
                        <input type="file" name="file" id="file" accept="image/*" onchange="previewFile()"><br>
                        <p></p>
                </td>
            </tr>
            <tr>
                <th><label>Tên phim</label></th>
                <td><input type="text" name="ten"></td>
                <td></td>
                <th><label>Quốc gia</label></th>
                <td>
                    <input list="Quốc gia" name="nuoc_san_xuat">
                    <datalist id="Quốc gia">
                        <option value="Việt Nam">
                        <option value="Trung Quốc">
                        <option value="Thái Lan">
                        <option value="Hàn Quốc">
                        <option value="Nhật Bản">
                        <option value="Mỹ">
                        <option value="Nga">
                        <option value="Ấn Độ">
                    </datalist>
                </td>
            </tr>
            <tr>
                <th><label>Thể loại</label></th>
                <td>
                <select name = "ma_the_loai">
                    @foreach($list_the_loai as $row)
                <option value = "{{$row->ma_the_loai}}">{{$row->ten_the_loai}}</option>
                @endforeach 
            </select>
                
                </td>
                <td></td>
                <th><label>Đạo diễn</label></th>
                <td><input type="text" name="ten_dao_dien"></td>
            </tr>
            <tr>
                <th><label>Thời lượng</label></th>
                <td><input type="text" name="thoi_luong"></td>
                <td></td>
                <th><label>Năm sản xuất</label></th>
                <td><input type="number" min="1900" max="2099" step="1" value="2025" name="nam_san_xuat"></td>
            </tr>
            <tr>
                <th><label>Mô tả</label></th>
                <td><textarea rows="2" cols="30" name="mo_ta"></textarea></td>
                <td></td>
                
            </tr>
        </table>
        {{ csrf_field() }}
        <div>
            <input type="submit" value="Thêm" name="add">
        </div>
        
        </form>
    </div>
        </x-qly-layout>
    </body>
</html>