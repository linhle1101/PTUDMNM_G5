<x-app-layout>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4 shadow-sm qr-card">
        <b><h2 class="text-center mb-4">Thông Tin Thanh Toán</h2></b>

        <!-- Thông tin thanh toán -->
        <div class="payment-details">
            <div class="details">
                <p><strong>Tên người mua:</strong> <span id="buyerName">{{ $user->name ?? 'Không xác định' }}</span></p>
                <p><strong>Email:</strong> <span id="buyerEmail">{{ $user->email ?? 'Không xác định' }}</span></p>
                <p><strong>Ngày giờ thanh toán:</strong> <span id="paymentDate">{{ $payment_date }}</span></p>
                <div class="timer" id="timer">Thời gian còn lại: 5:00</div>

                <!-- Nút xác nhận thanh toán -->
                <button id="confirmPayment" class="btn btn-success payment-button">Xác nhận thanh toán</button>

            </div>

            <div class="qr-code text-center">
                <img src="{{ asset('images/images_MHTT/receipt.jpg') }}" alt="QR Code" id="qrCode">
            </div>
            <!-- Thông báo "Thanh toán thành công" sẽ hiển thị sau khi bấm nút -->
            <div class="confirmation-message" id="confirmationMessage">
                    Thanh toán thành công!
                </div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/QMTT.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/QMTT.js') }}" defer></script>
@endpush
</x-app-layout>
