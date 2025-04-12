<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý tài khoản</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/qly.css')}}">


    
</head>

<body>
    <div class="grid-container">
        <div class="top-bar">
            <button class="menu-toggle" onclick="toggleMenu()">☰</button>
            <a href="#"><img src="{{asset('general_imgs/CGV_Cinemas.svg')}}" alt="Logo"/></a>
            <div class="user-info">

                    <span style="color: black;">Xin chào </span>
             <ul class="taikhoan">
            <li>
                    <img src="{{asset('general_imgs/icon_account.png')}}" class="imgacc"/>
                <ul class="dangxuat">
                    <li><a href="dangxuat.php">Đăng xuất</a></li>
                </ul>
            </li>
        </ul>
            <!--<a href="dangxuat.php"><img src="imgs/icon_account.png"/></a>-->

            @auth
                            <div class="dropdown">
                                <button type="button" class="btn btn-success dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Xin chào <!--{{ Auth::user()->name }}-->
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="{{route('account')}}">Quản lý</a><li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="dropdown-item" onclick="event.preventDefault();
                                                                this.closest('form').submit();">Đăng xuất</a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
            @else
            <a href="{{ route('login') }}">
                <button class='btn btn-sm btn-primary'>Đăng nhập</button>
            </a>&nbsp;
            <a href="{{ route('register') }}">
                <button class='btn btn-sm btn-success'>Đăng ký</button>
            </a>
            @endauth

            </div>
            <br style="clear:both">
        </div>

        <div class="side-menu" id="sideMenu">
            <h2>Menu</h2><a href="#">Trang Chủ</a>
            <a href="{{route('qlyphim')}}">Quản lý phim</a>
            <a href="{{route('lichChieu')}}">Quản lý lịch chiếu</a>
            <a href="#">Quản lý phòng chiếu</a>
            <a href="{{route('qlynhanvien')}}">Quản lý nhân viên</a>
        </div>

        <script>
            function toggleMenu() {
                document.getElementById('sideMenu').classList.toggle('open');
            }
        </script>
    </div>
    <main role="main" class="grid-container">
        {{$slot}}

        </main>

</body>
</html>