<html>
<head>
    <!-- Thêm vào <head> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
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
    <div style='text-align:center; color:#15c; font-weight:bold; font-size:20px;'>QUẢN LÝ SÁCH</div>
    <!--Thêm sách-->
</x-qly-layout>
</body>
</html>