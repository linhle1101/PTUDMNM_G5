<header class="header">
    <nav class="navbar">
        <ul class="menu-list menu-trigger">
            @foreach ($menu_items as $main_item => $items)
                <li class="menu-item">
                    <span class="main-item">{{ $main_item }}</span>
                    @if (!empty($items['submenu']))
                        <ul class="submenu dropdown-menu">
                            @foreach ($items['submenu'] as $category => $data)
                                <li class="submenu-category">
                                    <a href="{{ url($data['link']) }}" class="category-title">{{ $category }}</a>
                                    @if (!empty($data['submenu']))
                                        <ul class="category-items">
                                            @foreach ($data['submenu'] as $link => $title)
                                                <li><a href="{{ url($link) }}">{{ $title }}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </nav>

    <div class="logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/logocgv.png') }}" alt="CGV Logo" />
        </a>
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
