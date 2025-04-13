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
<x-app-layout>
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
    </x-app-layout>
</body>

</html>