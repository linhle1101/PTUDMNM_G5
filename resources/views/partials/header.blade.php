,
<header class="header">
    <div class="logo">
        <a href="{{url('/')}}">
            <img src="{{ asset('images/logocgv.png') }}" alt="CGV Logo">
        </a>
    </div>
    <nav class="main-menu">
        <ul>
            <li><a href="{{ url('/phim-dang-chieu') }}">PHIM ĐANG CHIẾU</a></li>
            <li><a href="{{ url('/phim-sap-chieu') }}">PHIM SẮP CHIẾU</a></li>
            <li><a href="{{ url('/thanh-vien') }}">THÀNH VIÊN</a></li>
        </ul>
    </nav>
    <div class="right-section">
        <div class="auth">
            <a href="#">Đăng Nhập</a> /
            <a href="#">Đăng Ký</a>
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
