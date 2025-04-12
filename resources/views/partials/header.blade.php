<header class="navbar">
        <div class="logo">
            <a href="{{url('/')}}">
                <img src="{{ asset('images/logocgv.png') }}" style="width: 150px; height: 80px" alt="CGV Logo">
            </a>
        </div>
        <nav class="main-menu">
            <ul class="nav-list">
                <li><a href="{{ url('/thanh-vien') }}">PHIM ĐANG CHIẾU</a></li>
                <li><a href="{{ url('/thanh-vien') }}">PHIM SẮP CHIẾU</a></li>
                <li><a href="{{ url('/thanh-vien') }}">THÀNH VIÊN</a></li>
            </ul>
        </nav>

        <div class="right-section">
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
    