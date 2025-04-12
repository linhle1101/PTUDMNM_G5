<html>
<head>
    <style>
        body {
            font-family: sans-serif;
            color: #333;
        }
        a {
            color: #1a73e8;
        }
    </style>
</head>
<body>
    <p>Chào bạn,</p>
    <p>Bạn có một yêu cầu lấy lại mật khẩu cho tài khoản đăng nhập.</p>
    <p>
        Vui lòng nhấn vào liên kết sau để đặt lại mật khẩu:
        <br>
        <a href="{{ $url }}">{{ $url }}</a>
    </p>
    <p>Nếu bạn không yêu cầu điều này, vui lòng bỏ qua email này.</p>
    <p>Trân trọng!</p>
</body>
</html>
