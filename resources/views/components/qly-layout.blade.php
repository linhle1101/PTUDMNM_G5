<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý tài khoản</title>
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
            </div>
            <br style="clear:both">
        </div>

        <div class="side-menu" id="sideMenu">
            <h2>Menu</h2><a href="#">Trang Chủ</a>
            <a href="Mainpage.php">Quản lý phim</a>
            <a href="lich_chieu.php">Quản lý lịch chiếu</a>
            <a href="#">Quản lý phòng chiếu</a>
            <a href="quanlynhanvien.php">Quản lý nhân viên</a>
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