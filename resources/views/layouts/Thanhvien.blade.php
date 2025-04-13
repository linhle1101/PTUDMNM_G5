<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGV Movie Booking</title>
    <link rel="stylesheet" href="trangchu.css">
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      rel="stylesheet"
    />
    <style>
.navbar {
    position: relative;
}
.menu-trigger {
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    text-decoration: none; /* Xóa gạch chân */
    color: black; /* Màu chữ đen */
    border-bottom: none; /* Loại bỏ đường viền gạch chân */
}

.menu-trigger:hover {
    color: red; /* Màu khi hover */
    text-decoration: none; /* Đảm bảo không có gạch chân khi hover */
}
.menu-list {
    list-style: none;
    margin: 0;
    padding: 0;
}

.menu-item {
    position: relative;
    display: inline-block;
    border-bottom: none;
}

.main-item {
    color: #000;
    text-decoration: none;  /* Xóa gạch chân */
    padding: 10px 15px;
    display: block;
    border-bottom: none;
}

.submenu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background: white;
    min-width: 200px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    padding: 10px 0;
    z-index: 1000;
}

.menu-item:hover .submenu {
    display: block;
}

.submenu-category {
    position: relative;
    padding: 5px 0;
}

.category-title {
    display: block;
    padding: 8px 20px;
    color: #333;
    font-weight: bold;
    border-bottom: 1px solid #eee;
}

.category-items {
    list-style: none;
    padding: 5px 0;
    margin: 0;
}

.category-items li a {
    color: #666;
    text-decoration: none;  /* Xóa gạch chân cho các submenu items */
    padding: 8px 20px;
    display: block;
}

.category-items li a:hover {
    background-color: #f5f5f5;
    color: #e71a0f;
    text-decoration: none;  /* Đảm bảo không có gạch chân khi hover */
}

/* Animation cho submenu */
.submenu {
    animation: fadeIn 0.3s ease-in-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.right-section {
  display: flex;
  align-items: center;
  gap: 20px;
  margin-right: 50px;
  
}

.auth a {
  text-decoration: none;
  color: black;
  font-weight: bold;
}

.auth a:hover {
  color: red;
}

.auth a i {
  font-size: 24px; /* Kích thước biểu tượng */
  color: black;
}

.auth a i:hover {
  color: red; /* Màu khi hover */
}
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.movie-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap; /* Cho phép nội dung gói nếu màn hình nhỏ */
  gap: 20px; /* Khoảng cách giữa các mục */
}

.movie-item {
  text-align: center;
  width: 250px; /* Chiều rộng cố định cho các mục */
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  padding: 15px;
}

.movie-item img {
  width: 100%; /* Chiều rộng đầy đủ trong khung */
  height: 350px; /* Chiều cao cố định */
  object-fit: cover; /* Đảm bảo hình không bị méo */
  border-radius: 5px;
}

.movie-item h3 {
  font-size: 16px;
  margin: 10px 0;
  text-transform: uppercase;
  font-weight: bold;
  color: #333;
}

.btn-group {
  display: flex;
  justify-content: space-between; /* Đảm bảo các nút có khoảng cách đồng đều */
  gap: 10px; /* Khoảng cách giữa các nút */
}

.detail-btn,
.buy-btn {
  flex: 1; /* Kích thước nút sẽ tự động bằng nhau */
  text-decoration: none;
  padding: 10px;
  border-radius: 5px;
  font-size: 14px;
  font-weight: bold;
  text-align: center;
  border: none;
}

.detail-btn {
  background-color: #007bff; /* Màu xanh */
  color: white;
  transition: all 0.3s ease-in-out;
  align-self: center;
}
.details-btn, .buy-btn {
    padding: 8px 10px;
    font-size: 14px;
    margin: 0 auto;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.buy-btn {
  background-color: #dc3545; /* Màu đỏ */
  color: white;
  transition: all 0.3s ease-in-out;
}

.detail-btn:hover {
  background-color: #0056b3;
}

.buy-btn:hover {
  background-color: #b52b37;
}
body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Header */
        header {
            background-color: #ff4d4d;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header img {
            height: 40px;
        }

        nav {
            display: flex;
            gap: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Container chính */
        .container {
            max-width: 900px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden; /* Chắc chắn nội dung không bị tràn */
        }

        /* Tabs */
        .tabs {
            display: flex;
            border-bottom: 1px solid #ddd;
        }

        .tabs button {
            flex: 1;
            padding: 10px;
            background-color: #ff4d4d;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .tabs button:hover {
            background-color: #ff3333;
        }

        .tabs button.active {
            background-color: #ff3333;
            font-weight: bold;
        }

        /* Nội dung tab */
        .tab-content {
            display: none;
            padding: 20px;
            border-top: none;
            text-align: left;
        }

        .tab-content.active {
            display: block;
            text-align: left;
        }
        /* Định dạng bảng */
table {
    width: 100%; /* Chiếm toàn bộ chiều rộng của container */
    border-collapse: collapse; /* Gộp viền */
    margin-top: 20px;
}

/* Định dạng các ô trong bảng */
th, td {
    border: 1px solid #ddd; /* Viền cho các ô */
    padding: 10px; /* Khoảng cách nội dung và viền */
    text-align: center; /* Căn giữa nội dung */
}

/* Tiêu đề bảng */
th {
    background-color: #f4f4f4; /* Màu nền cho header */
    font-weight: bold;
    color: #333;
}

/* Dòng lẻ và dòng chẵn */
tr:nth-child(even) {
    background-color: #fdf5e6; /* Màu nền cho dòng chẵn */
}

tr:hover {
    background-color: #f1f1f1; /* Hiệu ứng hover */
}



/* Header */
.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #fdf5e6;
  padding: 10px 20px;
  border-bottom: 2px solid black;
  position: relative;
}

/* Logo */
.logo img {
  height: 80px;
  width: auto;
  margin-left: 30px;
}

.menu-trigger {
  font-size: 18px;
  font-weight: bold;
  cursor: pointer;
}

.dropdown-menu {
  display: none; /* Ẩn menu mặc định */
  background-color: #fff;
  padding: 10px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.menu-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.menu-list > .dropdown {
  position: relative;
}

.menu-list > .dropdown > a {
  text-decoration: none;
  font-size: 16px;
  font-weight: bold;
  color: #000;
  padding: 10px;
  display: block;
}

.menu-list > .dropdown > a:hover {
  background-color: #eee;
}

.submenu {
  list-style: none;
  padding: 0;
  margin: 0;
  display: none; /* Ẩn submenu mặc định */
  background-color: #fdf5e6;
  border-left: 2px solid #ccc;
  padding-left: 15px;
}

.submenu > li > a {
  text-decoration: none;
  font-size: 14px;
  color: #333;
  padding: 5px 0;
  display: block;
}

.submenu > li > a:hover {
  color: red;
}

.dropdown-menu.show {
  display: block; /* Hiển thị menu khi được thêm lớp 'show' */
}

.dropdown:hover .submenu {
  display: block; /* Hiển thị submenu khi hover */
}

.right-section {
  display: flex;
  align-items: center;
  gap: 20px;
  margin-left: auto;
}

.auth a {
  text-decoration: none;
  color: black;
  font-weight: bold;
}

.auth a:hover {
  color: red;
}

.language-switch a {
  text-decoration: none;
  color: black;
  font-weight: bold;
}

.language-switch a.active {
  color: red;
}

.language-switch a:hover {
  text-decoration: underline;
}

/* Dropdown menu */
.dropdown {
  position: relative;
}

.dropdown a {
  cursor: pointer;
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #fdf5e6;
  border: 1px solid #ddd;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  z-index: 10;
  min-width: 150px;
}

.dropdown-menu a {
  display: block;
  padding: 10px;
  color: black;
  text-decoration: none;
  font-size: 14px;
  font-weight: normal;
  transition: background-color 0.3s;
}

.dropdown-menu a:hover {
  background-color: #fdf5e6;
  color: red;
}

.dropdown:hover .dropdown-menu {
  display: block;
}
.dropdown-menu.show {
  display: block; /* Hiển thị menu khi thêm lớp show */
}
.icon-menu {
  display: flex;
  justify-content: space-around;
  align-items: center;
  background-color: #fdf5e6;
  padding: 20px 10px;
  border-top: 2px;
  border-bottom: 2px solid black;
  margin: 0 auto;
  gap: 5px;
}

.icon-item {
  text-align: center;
  margin: 5px;
}

.icon-item img {
  width: 100px;
  height: 100px;
  margin: 0 auto;
}
.icon-item p {
  font-size: 14px;
  color: black;
  font-weight: bold;
  margin: 0;
}
/* Liên kết tổng quát */
.menu-list li a,
.submenu li a,
.auth a,
.language-switch a,
.dropdown-menu a {
  text-decoration: none; /* Loại bỏ dấu gạch chân */
  color: black; /* Màu chữ mặc định */
  font-weight: bold;
}

.menu-list li a:hover,
.submenu li a:hover,
.auth a:hover,
.language-switch a:hover,
.dropdown-menu a:hover {
  color: red; /* Thay đổi màu khi hover */
  text-decoration: none; /* Đảm bảo không có gạch chân khi hover */
}

/* Ngôn ngữ đang chọn (active state) */
.language-switch a.active {
  color: red;
  text-decoration: none; /* Loại bỏ gạch chân */
}

/* Các mục trong icon menu */
.icon-item a {
  text-decoration: none; /* Loại bỏ gạch chân cho liên kết trong icon menu */
}

.icon-item a:hover {
  text-decoration: none; /* Không gạch chân khi hover */
  color: red; /* Màu chữ khi hover */
}
/* Movie Selection Section */
.movie-selection {
  text-align: center;
  padding: 20px;
  background-color: #fdf5e6;
  border-top: 2px solid black;
  border-bottom: 2px solid black;
  margin: 0 auto;
}

h2.movie-title {
  font-family: "Lobster", cursive; /* Thay đổi font nếu cần */
  font-size: 36px;
  font-weight: bold;
  letter-spacing: 2px;
  text-align: center;
  position: relative;
  color: #000; /* Màu chữ */
  margin: 20px 0; /* Khoảng cách trên/dưới */
}

h2.movie-title::before,
h2.movie-title::after {
  content: "";
  position: absolute;
  top: 50%; /* Căn giữa theo chiều dọc */
  width: 30%;
  height: 1px;
  background: #000;
}

h2.movie-title::before {
  left: 0; /* Đường bên trái */
}

h2.movie-title::after {
  right: 0; /* Đường bên phải */
}

.movie-container {
  display: flex;
  justify-content: center;
  gap: 15px;
  flex-wrap: wrap;
}

.movie-item {
  position: relative;
  width: 200px;
  background-color: #f0f0f0;
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s, box-shadow 0.3s;
}

.movie-item:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.movie-item img {
  width: 100%;
  height: auto;
  display: block;
}

.rating {
  position: absolute;
  top: 10px;
  left: 10px;
  background-color: gold;
  color: black;
  font-weight: bold;
  font-size: 12px;
  padding: 5px;
  border-radius: 5px;
}

.sneak-show {
  position: absolute;
  top: 10px;
  right: 10px;
  background-color: red;
  color: white;
  font-size: 12px;
  padding: 5px;
  border-radius: 5px;
}

.movie-info {
  padding: 10px;
  text-align: center;
}

.movie-info h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 5px 0;
}

.movie-info p {
  font-size: 14px;
  color: gray;
}

.details-btn,
.buy-btn {
  padding: 8px 10px;
  font-size: 14px;
  margin-top: 10px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.details-btn {
  background-color: blue;
  color: white;
}

.details-btn:hover {
  background-color: darkblue;
}

.buy-btn {
  background-color: red;
  color: white;
  margin-left: 5px;
}

.buy-btn:hover {
  background-color: darkred;
}
/* Event Section */
.event-section {
  text-align: center;
  padding: 20px;
  background-color: #fdf5e6;
  border-top: 2px solid black;
  border-bottom: 2px solid black;
  margin: 0 auto;
}

/* Tiêu đề Event */
h2.event-title {
  font-family: "Lobster", cursive;
  font-size: 36px;
  font-weight: bold;
  letter-spacing: 2px;
  text-align: center;
  position: relative;
  color: #000;
  margin: 20px 0;
}

h2.event-title::before,
h2.event-title::after {
  content: "";
  position: absolute;
  top: 50%;
  width: 40%;
  height: 2px;
  background: #000;
}

h2.event-title::before {
  left: 0;
}

h2.event-title::after {
  right: 0;
}

/* Subtitle */
.event-subtitle-wrapper {
  text-align: center;
  margin: 10px 0;
}

.event-subtitle {
  color: #fff;
  background: red;
  display: inline-block;
  padding: 5px 15px;
  font-size: 14px;
  border-radius: 3px;
  text-decoration: none;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.event-subtitle:hover {
  background-color: #cc0000;
}

/* Event & Promotion Container Styles */
.event-carousel,
.promotion-carousel {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
  margin-top: 20px;
}

/* Item Styles */
.event-item,
.promotion-item {
  text-align: center;
  width: auto;
  max-width: 300px;
  background-color: #fff;
  border: 2px solid #000; /* Viền đen rõ hơn */
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s, box-shadow 0.3s;
  text-decoration: none;
  color: #000;
}

.event-item:hover,
.promotion-item:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Image Styles */
.event-item img,
.promotion-item img {
  width: 100%;
  height: auto;
  display: block;
  border-bottom: 2px solid #000; /* Đường phân cách nổi bật giữa ảnh và nội dung */
  margin: 0; /* Loại bỏ khoảng trắng dư thừa */
}

/* Text & Caption Styles */
.event-item p,
.promotion-item p {
  padding: 10px;
  font-size: 16px;
  font-weight: bold;
  color: #000;
  margin: 0;
  line-height: 1.5;
}

.promotion-item:hover p {
  color: #cc0000; /* Đổi màu chữ khi hover */
}

/* Mục Rộng Cho Promotion Đặc Biệt */
.promotion-item.wide {
  flex: 2; /* Chiếm gấp đôi chiều rộng */
  height: auto; /* Đảm bảo không giới hạn chiều cao */
  margin: 0; /* Loại bỏ khoảng trắng */
  padding: 0; /* Loại bỏ padding thừa */
  display: flex;
  flex-direction: column; /* Nội dung theo chiều dọc */
}

/* Hình ảnh bên trong mục rộng */
.promotion-item.wide img {
  width: 100%;
  height: auto;
  margin: 0;
  border-bottom: 2px solid #000;
}

/* Responsive Adjustments */
@media screen and (max-width: 768px) {
  .event-carousel,
  .promotion-carousel {
    gap: 10px; /* Giảm khoảng cách giữa các mục */
  }

  .event-item,
  .promotion-item,
  .promotion-item.wide {
    max-width: 100%; /* Chiếm toàn bộ chiều ngang trên màn hình nhỏ */
  }

  .promotion-item.wide {
    flex: 1; /* Trở lại kích thước đều trên màn hình nhỏ */
  }
}

@media screen and (max-width: 480px) {
  h2.event-title {
    font-size: 28px; /* Giảm kích thước tiêu đề trên màn hình nhỏ */
  }

  .event-item p,
  .promotion-item p {
    font-size: 14px; /* Giảm kích thước chữ */
  }
}
/* Footer Section */
.footer-section {
  background-color: #fdf5e6;
  padding: 20px 0;
  font-family: Arial, sans-serif;
  color: #000;
  border-top: 2px solid black;
  border-bottom: 2px solid black;
}

/* Footer Top */
.footer-top {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 20px 50px;
}

.footer-menu {
  list-style: none;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 20px;
  margin: 0;
  padding: 0;
  width: 100%;
}

.footer-menu li {
  flex: 1 1 200px;
}

.footer-menu h3 {
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 10px;
}

.footer-menu ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-menu ul li {
  margin: 5px 0;
}

.footer-menu ul li a {
  text-decoration: none;
  color: #000;
  font-size: 14px;
  transition: color 0.3s ease;
}

.footer-menu ul li a:hover {
  color: #cc0000;
}

/* Social Icons */
.social-icons {
  display: flex;
  gap: 10px;
  margin: 10px 0;
}

.social-icons a img {
  width: 24px;
  height: 24px;
}

.certification img {
  width: 100px;
  margin-top: 10px;
}

/* Footer Bottom */
.footer-bottom {
  text-align: center;
  padding: 10px 50px;
  font-size: 12px;
  line-height: 1.5;
  color: #333;
}


  </style>
</head>
<body>
    
     <section class="icon-menu">

</section>



  <div>
    
    <section class="movie-selection">
        <h2 class="movie-title">CGV MEMBERSHIP</h2>
        <div class="movie-container">
<div class="container">
    <!-- Tabs -->
    <div class="tabs">
        <button class="active" onclick="showTab('birthday', this)">Quà tặng sinh nhật</button>
        <button onclick="showTab('account', this)">Quản Lý Tài Khoản</button>
        <button onclick="showTab('support', this)">Ban Cần Hỗ Trợ</button>
        <button onclick="showTab('points', this)">Chương trình điểm thưởng</button>
    </div>

    <!-- Nội dung của từng tab -->

    <div id="birthday" class="tab-content active">
            <h2>Chính Sách Quà Tặng Sinh Nhật Cho Thành Viên CGV</h2>
            <p>Chính sách quà tặng sinh nhật cho từng hạng thành viên CGV:</p>
            <p class="bold">Thân Thiết & U22: 01 CGV Birthday Combo</p>
            <p class="bold">VIP: 01 CGV Birthday Combo + 01 Vé Xem Phim 2D/3D</p>
            <p class="bold">VVIP: CGV Birthday Combo + 02 Vé Xem Phim 2D/3D</p>
    
            <p><span class="highlight">Lưu ý:</span> Vào sinh nhật lần thứ 23, thành viên U22 sẽ nhận thêm 01 vé xem phim 2D/3D bên cạnh CGV Birthday Combo.</p>
            <p><span class="highlight">(*) CGV Birthday Combo</span> = 1 Bắp Ngọt size 44oz + 2 Nước size 22oz.</p>
    
                <h3>Điều Kiện và Điều Khoản</h3>
                <p>CGV Birthday Combo sẽ được hiển thị sẵn trong tài khoản thành viên có sinh nhật trong tháng. Tuy nhiên, để đổi quà sinh nhật, thành viên bắt buộc phải thỏa 01 trong những trường hợp sau:</p>
                <p class="bold">Trường hợp 1: Thành viên có phát sinh giao dịch mua vé/bắp nước/thẻ quà tặng tại rạp hoặc trên Website/Ứng dụng CGV trong vòng 24 tháng gần nhất.</p>
                <p class="bold">Trường hợp 2: Thành viên không có phát sinh giao dịch trong 24 tháng thì thực hiện giao dịch và có thể đổi quà ngay lập tức.</p>
                <p class="bold">Trường hợp 3: Thành viên đăng ký mới và thực hiện giao dịch để đổi quà ngay lập tức.</p>

    
            <h3>Cách Thức Đổi Quà Sinh Nhật</h3>
            <p>Khách hàng vui lòng đổi quà tại quầy của tất cả các rạp CGV.</p>
            <p>Xuất trình: (1) CCCD/VNeID/giấy tờ có ngày sinh và (2) Thẻ thành viên/Ứng dụng CGV.</p>
    
            <h3>Chi Tiết Điều Khoản</h3>
            <p>1. Coupon chỉ có giá trị trong tháng sinh nhật.</p>
            <p>2. Thông tin CCCD/CMND phải trùng khớp với tài khoản CGV.</p>
            <p>3. Mỗi tài khoản chỉ được thay đổi thông tin ngày sinh tối đa 3 lần.</p>
            <p>4. Quà tặng không có giá trị quy đổi thành tiền mặt.</p>
            <p>5. Không được yêu cầu hoàn/hủy coupon sau khi đổi quà.</p>
            <p>6. CGV Birthday Combo bao gồm 01 Bắp Ngọt 44oz và 02 Nước 22oz.</p>
            <p>7. Vé xem phim chỉ áp dụng cho 2D/3D (không áp dụng cho phòng chiếu đặc biệt).</p>
            <p>8. Quà tặng có thể tạm dừng khi hết số lượng tại rạp.</p>
    
            <h3>Cách Xem Thông Tin Coupon Sinh Nhật</h3>
            <p><span class="bold">Website:</span> Đăng nhập vào <span class="highlight">cgv.vn</span> → Vào phần “Tài khoản CGV” → Chọn mục “Coupon”.</p>
            <p><span class="bold">App:</span> Mở app CGV → Chọn “Thành viên CGV” → Chọn mục “Thẻ Q.Tặng | Voucher | Coupon”.</p>
    </div>


    <div id="account" class="tab-content">
        <h2>Quản Lý Tài Khoản</h2>
        <p>Đăng nhập vào Tài Khoản CGV, bạn có thể dễ dàng quản lý tài khoản thành viên của mình như:</p>
        <p>- Kiểm tra và chỉnh sửa thông tin tài khoản.</p>
        <p>- Tra cứu điểm thưởng, tổng chi tiêu và lịch sử giao dịch.</p>
        <p>- Kiểm tra thẻ quà tặng, voucher hoặc coupon hiện có trong tài khoản thành viên.</p>
        <p>Mỗi tuần, các thành viên sẽ nhận được Bản tin điện ảnh CGV qua email, cập nhật những tin tức mới nhất về phim ảnh, sự kiện và khuyến mãi. Cập nhật ngay email, điện thoại và địa chỉ của bạn để luôn nhận được những thông báo mới nhất từ CGV!</p>
    </div>

    <div id="support" class="tab-content">
            <h2>Ban Cần Hỗ Trợ</h2>
            <p>
                Với những ưu đãi hấp dẫn từ chương trình thành viên, CGV hy vọng sẽ mang đến cho bạn những trải nghiệm vượt xa điện ảnh.
            </p>
            <p>
                Mọi thắc mắc về chương trình thành viên bạn có thể liên hệ ngay Bộ phận hỗ trợ khách hàng của chúng tôi qua 
                email <strong>hoidap@cgv.vn</strong> hoặc hotline <strong>1900 6017</strong> 
                (8:00 – 22:00, từ thứ Hai đến Chủ Nhật - bao gồm các ngày Lễ, Tết).
            </p>
            <p>Cảm ơn bạn đã luôn đồng hành cùng CGV!</p>
    </div>
    
    <div id="points" class="tab-content">
        <h2>Chương Trình Điểm Thưởng</h2>
        <p>Chương trình bao gồm 4 đối tượng thành viên: U22 | CGV Member | CGV VIP | CGV VVIP, với những quyền lợi và mức ưu đãi khác nhau. Mỗi khi thực hiện giao dịch tại hệ thống rạp CGV, bạn sẽ nhận được một số điểm thưởng tương ứng với cấp độ thành viên:</p>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Điểm Thưởng</th>
                        <th>U22|Member</th>
                        <th>VIP</th>
                        <th>VVIP</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tại Quầy Vé</td>
                        <td>5%</td>
                        <td>7%</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>VD: 100.000 VND</td>
                        <td>5 Điểm</td>
                        <td>7 Điểm</td>
                        <td>10 Điểm</td>
                    </tr>
                    <tr>
                        <td>Quầy Bắp Nước</td>
                        <td>3%</td>
                        <td>4%</td>
                        <td>5%</td>
                    </tr>
                    <tr>
                        <td>VD: 100.000 VND</td>
                        <td>3 Điểm</td>
                        <td>4 Điểm</td>
                        <td>5 Điểm</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
            <h3>Lưu ý:</h3>
            <p>1 điểm = 1.000 VND, có giá trị như tiền mặt, được dùng để mua vé xem phim, thức uống/combo tại CGV Reward.</p>
            <p>Điểm thưởng có thời hạn sử dụng là 01 năm. Ví dụ: Điểm của bạn tích lũy vào 08:00 ngày 05/01/2024 sẽ hết hạn vào 07:59 ngày 05/01/2025.</p>
            <p>- Thanh toán 80.000 VND + 20 điểm </p>
            <p>- Thanh toán với 10.000 VND + 90 điểm thưởng</p>

           <h3>Cách làm tròn điểm thưởng:</h3> 
            <p>- Từ 0.1 đến 0.4: làm tròn xuống (Ví dụ: 3.2 điểm sẽ được tích vào tài khoản 3 điểm). Lưu ý: giao dịch có điểm tích lũy từ 0.1 đến 0.4 sẽ không được tích lũy điểm do làm tròn xuống 0, và đồng nghĩa với không được tích lũy chi tiêu.</p>
            <p>- Từ 0.5 đến 0.9: làm tròn lên (Ví dụ: 3.6 điểm sẽ được tích vào tài khoản 4 điểm)</p>

            <h3>Lưu ý:</h3>
            <p>1. Điểm thưởng có thời hạn sử dụng là 01 năm. Ví dụ: Điểm của bạn được nhận vào 08:00 ngày 05/01/2024 sẽ hết hạn sử dụng vào lúc 07:59:59 ngày 05/01/2025.</p>
            <p>2. Điểm thưởng có giá trị sử dụng tại tất cả các rạp CGV trên toàn quốc.</p>
            <p>3. Sau khi dịch vụ được CGV Việt Nam hoàn thành, điểm thưởng sẽ được ghi nhận vào tài khoản của bạn vào 8:00 sáng ngày tiếp theo. Ví dụ: suất chiếu của bạn diễn ra vào ngày 05/01/2024, điểm thưởng sẽ được ghi nhận vào tài khoản của bạn vào 8:00 sáng ngày 06/01/2024. </p>
            <p>4. KHÔNG tích lũy chi tiêu/điểm thưởng đối với các giao dịch đã áp dụng các chương trình giảm giá/khuyến mãi do CGV và đối tác tổ chức.</p>
            
            <p>5. KHÔNG tích lũy chi tiêu/điểm thưởng đối với các giao dịch:</p>
            <p>- Mua/sử dụng voucher</p>
            <p>- Mua thẻ quà tặng và eGift</p>
            <p>- Mua vé/ F&B bằng thẻ CGVian, thẻ CJ membership và thẻ Premium</p>     
            <p>- Giao dịch có hình thức thanh toán 100% bằng điểm thưởng.</p>       

            <p>6. Thành viên được tích lũy điểm/chi tiêu cho tối đa 10 giao dịch/ngày.</p>
            <p>7. Bạn có thể dễ dàng kiểm tra điểm thưởng của mình trên CGV Website hoặc Ứng dụng CGV trên điện thoại (Mobile App). </p>
            <p>8. Điểm thưởng tối thiểu được sử dụng cho mỗi giao dịch là 20 điểm trở lên.</p>
            <p>9. Thành viên khi thanh toán trực tuyến trên Website/APP, trong 1 giao dịch, điểm thưởng chỉ được sử dụng thanh toán tối đa 90% giá trị đơn hàng.</p>
            <p>10. Khi thực hiện các giao dịch sử dụng điểm thưởng hoặc vé miễn phí trực tiếp tại rạp, khách hàng vui lòng xuất trình tài khoản thành viên (Thẻ cứng hoặc tài khoản online trên Ứng dụng CGV) và Giấy tờ tùy thân hoặc giấy tờ khác có thể hiện ngày tháng năm sinh (Bản gốc hoặc ảnh chụp) cho nhân viên rạp để tiến hành xác thực chính chủ tài khoản thành viên. Nhân viên rạp có quyền từ chối yêu cầu của khách hàng nếu khách hàng không cung cấp được tài khoản thành viên và/hoặc giấy tờ quy định tại đây hoặc các thông tin Khách Hàng cung cấp không trùng khớp với nhau. Việc thực hiện các giao dịch sử dụng điểm thưởng hoặc vé miễn phí trên website của CGV và/hoặc ứng dụng CGV trên điện thoại luôn được mặc định là được sử dụng bởi chính chủ tài khoản thành viên. Khách Hàng có nghĩa vụ bảo mật tài khoản Thành Viên của mình. CGV Việt Nam sẽ không giải quyết bất kỳ khiếu nại nào liên quan đến điểm thưởng nếu giao dịch sử dụng điểm thưởng đó được thực hiện trực tuyến.</p>
            <p>CGV Việt Nam sẽ không hoàn và/hoặc giải quyết đối với điểm thưởng đã được sử dụng nếu Khách Hàng không chứng minh được Khách Hàng không phải là người sử dụng điểm thưởng và quyết định của CGV Việt Nam là quyết định cuối cùng.</p>
            <p>11. Khi mua vé online và thanh toán bằng các hình thức điểm, coupon, voucher, thẻ Premium card, CJ member, thẻ quà tặng, hệ thống sẽ yêu cầu bạn nhập mật mã thanh toán (gồm 06 chữ số, thông tin chi tiết vui lòng truy cập TẠI ĐÂY ).</p>        
        </div>
    </div>


</div>

<script>
    function showTab(tabId, button) {
        // Ẩn tất cả các tab nội dung
        const tabs = document.querySelectorAll('.tab-content');
        tabs.forEach(tab => tab.classList.remove('active'));

        // Hiển thị tab được chọn
        document.getElementById(tabId).classList.add('active');

        // Xóa class 'active' khỏi tất cả các nút
        const buttons = document.querySelectorAll('.tabs button');
        buttons.forEach(btn => btn.classList.remove('active'));

        // Thêm class 'active' cho nút được chọn
        button.classList.add('active');
    }
</script>
</section>
</div>
</body>

</html>
  </x-app-layout>