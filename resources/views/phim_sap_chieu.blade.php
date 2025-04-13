<x-app-layout>
    <section class="movie-selection">
        <h2 class="text-center movie-title">Phim Sắp Chiếu</h2>
        <div class="movie-container">
        @php
                $limit = request()->get('limit', 5); // Giới hạn số phim hiển thị, mặc định là 5
                $count = 0;
            @endphp

@foreach ($phim_sap_chieu as $p)
                @if ($count >= $limit)
                    @break
                @endif

                <div class="movie-item">
                    <img src="{{ asset('images/imgs/' . $p->file_hinhAnh) }}" alt="{{ $p->ten }}">
                    <h3>{{ $p->ten }}</h3>
                    <div class="btn-group">
                        <a href="{{ url('detail/' . $p->ma_phim) }}" class="detail-btn">Xem chi tiết</a>
                        <a href="{{ url('muave/' . $p->ma_phim) }}" class="buy-btn">Mua vé</a>
                    </div>
                </div>

                @php $count++; @endphp

            @endforeach
        </div>

        @if (count($phim_sap_chieu) > $limit)
            <div class="btn-xem-them">
                <a href="?limit={{ $limit + 5 }}">Xem thêm</a>
            </div>
        @endif

    </section>

</x-app-layout>