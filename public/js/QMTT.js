// qr.js
document.addEventListener("DOMContentLoaded", function () {
    let timeRemaining = 5 * 60;
    const timerElement = document.getElementById("timer");

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

    document.addEventListener("DOMContentLoaded", function () {
      const btnConfirm = document.getElementById("confirmPayment");
      const successMessage = document.getElementById("confirmationMessage");
  
      btnConfirm.addEventListener("click", function () {
          successMessage.style.display = "block"; // Hiển thị dòng chữ khi nhấn nút
      });
  });
  

    document.getElementById("confirmPayment").addEventListener("click", function () {
        document.getElementById("confirmationMessage").style.display = "block";

        // Sau 2 giây sẽ chuyển hướng sang trang thanh toán thành công
        setTimeout(() => {
            window.location.href = "/thanh-toan-thanh-cong";
        }, 2000);
    });
});
