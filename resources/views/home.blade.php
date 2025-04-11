<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGV Movie Booking</title>
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


    <section class="icon-menu">
        @if ($iconMenus->count() > 0)
        @foreach ($iconMenus as $icon)
        <div class="icon-item">
            <a href="{{ $icon->duong_dan_chi_tiet }}">
                <img src="{{ $icon->duong_dan_hinh_anh }}" alt="{{ $icon->ten_muc }}" />
                <p>{{ $icon->ten_muc }}</p>
            </a>
        </div>
        @endforeach
        @else
        <p>Không có mục nào trong danh sách.</p>
        @endif
    </section>

    <section class="movie-selection">
        <h2 class="movie-title">MOVIE SELECTION</h2>
        <div class="movie-container">
            @php
            $limit = request()->query('limit', 4);
            $displayedPhims = $phims->take($limit);
            @endphp

            @if ($displayedPhims->count() > 0)
            @foreach ($displayedPhims as $phim)
            <div class="movie-item">
                <img src="{{ asset('admin/imgs/' . $phim->file_hinhAnh) }}" alt="{{ $phim->ten }}">
                <h3>{{ $phim->ten }}</h3>
                <div class="btn-group">
                    <a href="{{ url('detail?ma_phim=' . $phim->ma_phim) }}" class="detail-btn">Xem chi tiết</a>
                    <a href="{{ url('muave?ma_phim=' . $phim->ma_phim) }}" class="buy-btn">Mua vé</a>
                </div>
            </div>
            @endforeach

            @if ($phims->count() > $limit)
            <div class="btn-xem-them">
                <a href="{{ url()->current() . '?limit=' . ($limit + 4) }}">Xem thêm</a>
            </div>
            @endif
            @else
            <p>Không có phim nào đang chiếu.</p>
            @endif
        </div>
    </section>

    <section class="event-section">
        <h2 class="event-title">EVENT</h2>

        <div class="event-subtitle-wrapper">
            <a href="{{ url('thanh-vien-cgv.html') }}" class="event-subtitle">
                Thành Viên CGV | Tin Mới & Ưu Đãi
            </a>
        </div>

        <div class="event-carousel">
            @if($suKiens->count() > 0)
            @foreach($suKiens as $suKien)
            <a href="{{ $suKien->duong_dan_chi_tiet }}" class="event-item">
                <img src="{{ $suKien->duong_dan_hinh_anh }}" alt="{{ $suKien->tieu_de }}" />
                {{ $suKien->tieu_de }}
            </a>
            @endforeach
            @else
            <p>Không có sự kiện nào.</p>
            @endif
        </div>
    </section>

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
</body>

</html>