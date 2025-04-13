<html>
<head>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h2 {
            color: #1a73e8;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background-color:rgb(232, 26, 26);
            text-decoration: none;
            color: #fff !important;
            border-radius: 6px;
            font-weight: bold;
        }
        .footer {
            font-size: 14px;
            color: #777;
            margin-top: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>Khôi phục mật khẩu</h2>
        <p>Chào bạn,</p>
        <p>Chúng tôi đã nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn.</p>
        <p>Vui lòng nhấn vào nút bên dưới để tiếp tục quá trình đặt lại mật khẩu:</p>

        <a href="{{ $url }}" class="btn" >Đặt lại mật khẩu</a>

        <p>Nếu bạn không yêu cầu đặt lại mật khẩu, vui lòng bỏ qua email này.</p>

        <div class="footer">
            Trân trọng,<br>
            Đội ngũ hỗ trợ khách hàng
        </div>
    </div>
</body>
</html>
