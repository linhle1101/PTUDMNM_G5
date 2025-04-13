<x-app-layout>
<div class="container d-flex justify-content-center align-items-center min-vh-80">
    <div class="card p-4 shadow-sm" style="width: 100%; max-width: 500px;">
        <h2 class="text-center mb-4">Thanh Toán</h2>
        
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('thanh_toan.process') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="discount_code_tt" class="form-label">Mã Giảm Giá</label>
                <input type="text" id="discount_code_tt" name="discount_code_tt" class="form-control"
                    placeholder="Nhập mã giảm giá (nếu có)">
            </div>

            <div class="radio-group">
                <label class="form-label">Chọn Hình Thức Thanh Toán</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method_tt" id="vnpay" value="vnpay">
                    <label class="form-check-label" for="vnpay">VNPay</label>
                </div>
            </div>

            <div class="mb-3"> 
    <label for="total_amount_tt" class="form-label">Tổng Cộng</label>
    <input type="text" id="total_amount_tt" name="total_amount_tt" class="form-control total-amount"
        value="{{ number_format($tong_tien_ve, 0, ',', '.') }} VNĐ" readonly>
            </div>

            <div class="text-center">
        <button type="submit" class="btn btn-primary btn-payment">Thanh Toán</button>
            </div>

            <div class="text-center ">
            
                <a href="{{ url('/home') }}" class="btn btn-danger btn-cancel">Hủy Thanh Toán</a>
              
            </div>
        </form>
        <div id="message" class="text-center mt-3"></div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/stylett.css') }}">
@endpush
</x-app-layout>