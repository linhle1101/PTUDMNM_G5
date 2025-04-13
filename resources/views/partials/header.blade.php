<header class="header">
    <nav class="navbar">
    <div class="logo">
        <a href="{{ url('/home') }}">
            <img src="{{ asset('images/logocgv.png') }}" alt="CGV Logo" />
        </a>
    </div>
    </nav>
       <nav class="main-menu">
            <ul class="nav-list">
                <li><a href="{{ url('/phim_dang_chieu') }}">PHIM ĐANG CHIẾU</a></li>
                <li><a href="{{ url('/phim_sap_chieu') }}">PHIM SẮP CHIẾU</a></li>
                <li><a href="{{ url('/thanhvien') }}">THÀNH VIÊN</a></li>
            </ul>
        </nav>

        <div class="auth">
    @auth
    <a href="{{ url('/thanhvien') }}">
            <i class="fas fa-user-circle"></i>
        </a>
    <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
           style="text-decoration: none; font-weight: bold; margin-left: 10px;">
            Đăng Xuất
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @else
        <a href="{{ route('login') }}" style="text-decoration: none; font-weight: bold;">Đăng Nhập</a> /
        <a href="{{ route('register') }}" style="text-decoration: none; font-weight: bold;">Đăng Ký</a>
    @endauth
</div>

    <div class="right-section">
        <div class="auth">
            <a href="#"></a> 
            <a href="#"></a>
        </div>
        <div class="language-switch">
            <a href="#" class="active">VN</a> | <a href="#">EN</a>
        </div>
    </div>
</header>

<section class="icon-menu">
    @if ($icon_menu->count() > 0)
        @foreach ($icon_menu as $item)
            <div class="icon-item">
                <a href="{{ $item->duong_dan_chi_tiet }}">
                    <img src="{{ asset($item->duong_dan_hinh_anh) }}" alt="{{ $item->ten_muc }}" />
                    <p>{{ $item->ten_muc }}</p>
                </a>
            </div>
        @endforeach
    @else
        <p>Không có mục nào trong danh sách.</p>
    @endif
</section>
