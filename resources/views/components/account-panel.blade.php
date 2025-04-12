<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị tài khoản</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/trangchu.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        rel="stylesheet" />
    <style>
        .main-header {
            background-color: #fff8e1;
            border-bottom: 2px solid #000;
            padding: 10px 0;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
        }

        .logo img {
            height: 40px;
        }

        .main-menu .nav-list {
            list-style: none;
            display: flex;
            gap: 40px;
            margin: 0;
            padding: 0;
        }

        .main-menu .nav-list li a {
            text-decoration: none;
            font-weight: bold;
            color: #111;
            font-size: 16px;
            transition: color 0.3s;
        }

        .main-menu .nav-list li a:hover {
            color: #e71a0f;
        }
    </style>
</head>

<body>
    <header class="navbar">
        <div class="logo">
        <a href="index.php">
                <img src="{{ asset('images/logocgv.png') }}" style="width: 150px; height: 80px" alt="CGV Logo">
            </a>
        </div>
        <nav class="main-menu"  >
            <ul class="nav-list">
            <li><a href="{{ url('/thanh-vien') }}">PHIM ĐANG CHIẾU</a></li>
            <li><a href="{{ url('/thanh-vien') }}">PHIM SẮP CHIẾU</a></li>
                <li><a href="{{ url('/thanh-vien') }}">THÀNH VIÊN</a></li>
            </ul>
        </nav>

        <div class="right-section" >
            <div class="auth">
                <a href="#" style="text-decoration: none; font-weight: bold;">Đăng Nhập</a> /
                <a href="#" style="text-decoration: none; font-weight: bold;">Đăng Ký</a>
            </div>
        </div>

        <div class="language-switch">
            <a href="#" class="active">VN</a> | <a href="#">EN</a>
        </div>
        </div>
    </header>

    <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-md-4 content ">
        <!-- Nội dung trang quản trị -->
            {{$slot}}
      </main>

    <footer class="footer-section">
        <div class="footer-top">
            <ul class="footer-menu">
                <li>
                    <h3>CGV Việt Nam</h3>
                    <ul>
                        <li><a href="#">Giới Thiệu</a></li>
                        <li><a href="#">Tiện Ích Online</a></li>
                        <li><a href="#">Thẻ Quà Tặng</a></li>
                        <li><a href="#">Tuyển Dụng</a></li>
                        <li><a href="#">Liên Hệ Quảng Cáo CGV</a></li>
                        <li><a href="#">Dành cho đối tác</a></li>
                    </ul>
                </li>
                <li>
                    <h3>Điều khoản sử dụng</h3>
                    <ul>
                        <li><a href="#">Điều Khoản Chung</a></li>
                        <li><a href="#">Điều Khoản Giao Dịch</a></li>
                        <li><a href="#">Chính Sách Thanh Toán</a></li>
                        <li><a href="#">Chính Sách Bảo Mật</a></li>
                        <li><a href="#">Câu Hỏi Thường Gặp</a></li>
                    </ul>
                </li>
                <li>
                    <h3>Kết nối với chúng tôi</h3>
                    <div class="social-icons">
                        <a href="#"><img src="./images/facebook.png" alt="Facebook" /></a>
                        <a href="#"><img src="./images/youtube.png" alt="YouTube" /></a>
                        <a href="#"><img src="./images/instagram.png" alt="Instagram" /></a>
                        <a href="#"><img src="./images/zalo.png" alt="Zalo" /></a>
                    </div>
                    <a href="#" class="certification">
                        <img
                            src="./images/thongbaobocongthuong.png"
                            alt="Đã Thông Báo Bộ Công Thương" />
                    </a>
                </li>
                <li>
                    <h3>Chăm sóc khách hàng</h3>
                    <ul>
                        <li>Hotline: 1900 6017</li>
                        <li>Giờ làm việc: 8:00 - 22:00</li>
                        <li>Email hỗ trợ: hoidap@cgv.vn</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>
                <strong>CÔNG TY TNHH CJ CGV VIỆT NAM</strong><br />
                Giấy Chứng nhận đăng ký doanh nghiệp: 0303675393 đăng ký lần đầu ngày
                31/7/2008, được cấp bởi Sở Kế hoạch và Đầu tư Thành phố Hồ Chí
                Minh.<br />
                Địa chỉ: Lầu 2, số 7/28, Đường Thành Thái, Phường 14, Quận 10, Thành
                phố Hồ Chí Minh, Việt Nam.<br />
                Đường dây nóng (Hotline): 1900 6017<br />
                COPYRIGHT 2017 CJ CGV VIETNAM CO., LTD. ALL RIGHTS RESERVED
            </p>
        </div>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>