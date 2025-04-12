document.addEventListener("DOMContentLoaded", function () {
    let timeRemaining = 5 * 60;
    const timerElement = document.getElementById("timer");
    const btnConfirm = document.getElementById("confirmPayment");
    const successMessage = document.getElementById("confirmationMessage");
    const paymentForm = document.getElementById("paymentForm"); // Form gửi POST

    // Bắt đầu đếm ngược
    const countdown = setInterval(function () {
        const minutes = Math.floor(timeRemaining / 60);
        const seconds = timeRemaining % 60;
        timerElement.textContent = `Thời gian còn lại: ${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        timeRemaining--;

        if (timeRemaining < 0) {
            clearInterval(countdown);
            alert("Hết thời gian thanh toán!");
        }
    }, 1000);

    // Ẩn thông báo thành công lúc đầu
    successMessage.style.display = "none";

    // Xử lý khi nhấn nút "Xác nhận thanh toán"
    btnConfirm.addEventListener("click", function () {
        clearInterval(countdown); // Dừng đếm ngược
        timerElement.textContent = "Đã thanh toán";
        successMessage.style.display = "block"; // Hiển thị dòng chữ thành công

        // Sau 2 giây sẽ gửi form POST thay vì chuyển trang bằng GET
        setTimeout(() => {
            paymentForm.submit();
        }, 2000);
    });
});
