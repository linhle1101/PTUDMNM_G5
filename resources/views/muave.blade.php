<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGV Movie Booking</title>
    <link rel="stylesheet" href="{{ asset('css/trangchu.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/muave.css') }}" />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        rel="stylesheet" />
</head>

<body>
<x-app-layout>
    <main>
        <div class="movie-details">
            <div class="movie-poster">
                <img src="./admin/imgs/<?php echo $phim['file_hinhAnh']; ?>" alt="<?php echo $phim['ten']; ?>">
            </div>
            <div class="movie-description">
                <ul>
                    <h1><?php echo $phim['ten']; ?></h1>
                    <li><strong>Đạo diễn:</strong> <?php echo $phim['ten_dao_dien']; ?></li>
                    <li><strong>Thể loại:</strong> <?php echo $phim['ten_the_loai']; ?></li>
                    <li><strong>Khởi chiếu:</strong> <?php echo $phim['ngay_khoi_chieu']; ?></li>
                    <li><strong>Thời lượng:</strong> <?php echo $phim['thoi_luong']; ?> phút</li>
                </ul>
            </div>
        </div>
        </div>
        <div class="synopsis">
            <p><?php echo $phim['mo_ta']; ?></p>
        </div>
        <form id="bookingForm" method="GET" action="{{ route('muave') }}">
            <input type="hidden" name="ma_phim" value="{{ $maPhim }}">

            <section class="booking-section">
                <h2>Chọn ngày</h2>
                <div class="dates">
                    @foreach ($ngayChieuList as $ngay)
                    @php
                    $formattedDate = \Carbon\Carbon::parse($ngay)->format('Y-m-d');
                    $checked = request()->input('ngay') === $formattedDate ? 'checked' : '';
                    $selected = request()->input('ngay') === $formattedDate ? 'selected-date' : '';
                    @endphp
                    <label class="date-slot {{ $selected }}">
                        <input type="radio" name="ngay" value="{{ $formattedDate }}" class="date-radio" {{ $checked }} onchange="this.form.submit()">
                        {{ $formattedDate }}
                    </label>
                    @endforeach
                </div>

                <h2>Chọn khung giờ</h2>
                <div class="times">
                    @foreach ($gioChieuList as $gio)
                    @php
                    $checked = request()->input('gio') === $gio ? 'checked' : '';
                    $selected = request()->input('gio') === $gio ? 'selected-time' : '';
                    @endphp
                    <label class="time-slot {{ $selected }}">
                        <input type="radio" name="gio" value="{{ $gio }}" class="time-radio" {{ $checked }} onchange="this.form.submit()">
                        {{ $gio }}
                    </label>
                    @endforeach
                </div>
            </section>

            <div class="screen-container">
                <div class="screen"></div>
                <div class="screen-perspective"></div>
                <div class="screen-text">Màn hình</div>
            </div>

            <div class="form-section">
                <h2>Chọn ghế</h2>
                <div class="seat-container">
                    <div class="seat-section">
                        @foreach ($rows as $row)
                        <div class="seat-row">
                            @for ($col = 1; $col <= 5; $col++)
                                @php
                                $seat_id=$row . $col;
                                $checked=in_array($seat_id, $selectedSeats ?? []) ? 'checked' : '' ;
                                @endphp
                                <div class="seat">
                                <input type="checkbox" id="{{ $seat_id }}" name="ghe[]" value="{{ $seat_id }}" {{ $checked }} onchange="this.form.submit()">
                                <label for="{{ $seat_id }}">{{ $seat_id }}</label>
                        </div>
                        @endfor
                    </div>
                    @endforeach
                </div>

                <div class="seat-section">
                    @foreach ($rows as $row)
                    <div class="seat-row">
                        @for ($col = 6; $col <= 10; $col++)
                            @php
                            $seat_id=$row . $col;
                            $checked=in_array($seat_id, $selectedSeats ?? []) ? 'checked' : '' ;
                            @endphp
                            <div class="seat">
                            <input type="checkbox" id="{{ $seat_id }}" name="ghe[]" value="{{ $seat_id }}" {{ $checked }} onchange="this.form.submit()">
                            <label for="{{ $seat_id }}">{{ $seat_id }}</label>
                    </div>
                    @endfor
                </div>
                @endforeach
            </div>
            </div>
            </div>

            <div class="seat-legend">
                <div class="legend-item">
                    <div class="legend-box available"></div>
                    <span>Ghế trống</span>
                </div>
                <div class="legend-item">
                    <div class="legend-box selected"></div>
                    <span>Ghế đã chọn</span>
                </div>
                <div class="legend-item">
                    <div class="legend-box occupied"></div>
                    <span>Ghế đã đặt</span>
                </div>
            </div>
        </form>


        <div class="selection-summary mt-4">
            <h3>Thông tin bạn đã chọn:</h3>
            <p><strong>Ngày chiếu:</strong> <span id="selected-date-display">Chưa chọn</span></p>
            <p><strong>Giờ chiếu:</strong> <span id="selected-time-display">Chưa chọn</span></p>
            <p><strong>Ghế đã chọn:</strong> <span id="selected-seats-display">Chưa chọn</span></p>
        </div>

        <form action="{{ route('datve.luu') }}" method="POST">
            @csrf

            <input type="hidden" name="ma_phim" value="{{ $maPhim ?? '' }}">
            <input type="hidden" name="ngay" id="payment_ngay" value="{{ $selected_date ?? '' }}">
            <input type="hidden" name="gio" id="payment_gio" value="{{ $selected_time ?? '' }}">

            @if (!empty($selected_seats))
            @foreach ($selected_seats as $seat)
            <input type="hidden" name="ghe[]" value="{{ $seat }}">
            @endforeach
            @endif

            <div class="d-flex justify-content-center mt-4">
                <button type="submit" name="confirm_booking" class="btn btn-danger px-5">
                    Xác Nhận Đặt Vé
                </button>
            </div>
        </form>


    </main>
</x-app-layout>

</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dateRadios = document.querySelectorAll('.date-radio');
        const timeRadios = document.querySelectorAll('.time-radio');

        dateRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                document.querySelectorAll('.date-slot').forEach(label => label.classList.remove('selected-date'));
                radio.closest('label').classList.add('selected-date');
            });
        });

        timeRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                document.querySelectorAll('.time-slot').forEach(label => label.classList.remove('selected-time'));
                radio.closest('label').classList.add('selected-time');
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const paymentNgay = document.getElementById('payment_ngay');
        const paymentGio = document.getElementById('payment_gio');
        const paymentGhe = document.getElementById('payment_ghe');

        const ngayInputs = document.querySelectorAll('input[name="ngay"]');
        const gioInputs = document.querySelectorAll('input[name="gio"]');
        const gheInputs = document.querySelectorAll('input[name="ghe[]"]');

        const selectedDateDisplay = document.getElementById('selected-date-display');
        const selectedTimeDisplay = document.getElementById('selected-time-display');
        const selectedSeatsDisplay = document.getElementById('selected-seats-display');

        function updateSummary() {
            const ngay = document.querySelector('input[name="ngay"]:checked')?.value || 'Chưa chọn';
            const gio = document.querySelector('input[name="gio"]:checked')?.value || 'Chưa chọn';
            const ghe = Array.from(document.querySelectorAll('input[name="ghe[]"]:checked')).map(e => e.value);

            selectedDateDisplay.textContent = ngay;
            selectedTimeDisplay.textContent = gio;
            selectedSeatsDisplay.textContent = ghe.length > 0 ? ghe.join(', ') : 'Chưa chọn';

            if (paymentNgay) paymentNgay.value = ngay;
            if (paymentGio) paymentGio.value = gio;
            if (paymentGhe) paymentGhe.value = ghe.join(', ');
        }

        ngayInputs.forEach(input => input.addEventListener('change', updateSummary));
        gioInputs.forEach(input => input.addEventListener('change', updateSummary));
        gheInputs.forEach(input => input.addEventListener('change', updateSummary));

        updateSummary();
    });
</script>



</html>