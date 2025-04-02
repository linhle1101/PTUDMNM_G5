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
    
</body>
</html>