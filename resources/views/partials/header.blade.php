<header class="header">
    <nav class="navbar">
        <ul class="menu-list">
            <li class="menu-item">
                <a href="#" class="main-item">☰ Menu</a>
            </li>
        </ul>
    </nav>

    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logocgv.png') }}" alt="CGV Logo">
        </a>
    </div>

    <div class="right-section">
        <div class="auth">
            @auth
                <a href="{{ route('profile') }}"><i class="fas fa-user-circle"></i></a>
                <a href="{{ route('logout') }}" style="text-decoration: none; font-weight: bold; margin-left: 10px;">Đăng Xuất</a>
            @else
                <a href="{{ route('login') }}" style="text-decoration: none; font-weight: bold;">Đăng Nhập</a> /
                <a href="{{ route('register') }}" style="text-decoration: none; font-weight: bold;">Đăng Ký</a>
            @endauth
        </div>

        <div class="language-switch">
            <a href="#" class="active">VN</a> | <a href="#">EN</a>
        </div>
    </div>
</header>
