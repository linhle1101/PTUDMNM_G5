<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CGV Movie Booking</title>
  <link rel="stylesheet" href="trangchu.css" />
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    rel="stylesheet"
  />
  <style>
html, body {
  margin: 0;
  padding: 0;
  background-color: #fdf5e6 !important;
  box-sizing: border-box;
}

/* Nếu có wrapper ngoài container */
.wrapper, .main, .content, .tab-content {
  background-color: #fdf5e6 !important;
}

section {
  margin: 0;
  padding: 0;
}

.container {
  max-width: 900px;
  margin: 0 auto;
  background: #fdf5e6; /* sửa từ white */
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.tabs {
  display: flex;
  width: 100%;
  background-color: #ff4d4d;
  border-radius: 6px 6px 0 0;
  overflow: hidden;
}

.tabs button {
  flex: 1;
  border: none;
  background-color: transparent;
  color: white;
  font-weight: bold;
  font-size: 16px;
  padding: 14px 0;
  cursor: pointer;
  transition: background-color 0.3s ease;
  border-right: 1px solid #ff9999;
}

.tabs button:last-child {
  border-right: none;
}

.tabs button:hover {
  background-color: #e60000;
}

.tabs button.active {
  background-color: #cc0000;
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


.movie-selection {
  background-color: #fdf5e6;
  padding: 20px 0 0 0;
  margin: 0;
}

.movie-title {
  text-align: center;
  font-size: 32px;
  color: #cc0000;
  margin-bottom: 30px;
}

html, body, .container, .tab-content, main, section, .wrapper {
  background-color: #fdf5e6 !important;
}

  </style>
</head>
<body>
  <section class="icon-menu"></section>

  <section class="movie-selection">
  <h2 class="movie-title">CGV MEMBERSHIP</h2>
  <div class="tab-wrapper">
    <div class="tabs">
      <button class="active" onclick="showTab('birthday', this)">Quà tặng sinh nhật</button>
      <button onclick="showTab('account', this)">Quản Lý Tài Khoản</button>
      <button onclick="showTab('support', this)">Ban Cần Hỗ Trợ</button>
      <button onclick="showTab('points', this)">Chương trình điểm thưởng</button>
    </div>

    <div class="tab-container">
      <div id="birthday" class="tab-content active">
        <h2>Chính Sách Quà Tặng Sinh Nhật Cho Thành Viên CGV</h2>
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
        <h2>Quản Lý Tài Khoản</h2><p>Đăng nhập vào Tài Khoản CGV, bạn có thể dễ dàng quản lý tài khoản thành viên của mình như:</p>
        <p>- Kiểm tra và chỉnh sửa thông tin tài khoản.</p>
        <p>- Tra cứu điểm thưởng, tổng chi tiêu và lịch sử giao dịch.</p>
        <p>- Kiểm tra thẻ quà tặng, voucher hoặc coupon hiện có trong tài khoản thành viên.</p>
        <p>Mỗi tuần, các thành viên sẽ nhận được Bản tin điện ảnh CGV qua email, cập nhật những tin tức mới nhất về phim ảnh, sự kiện và khuyến mãi. Cập nhật ngay email, điện thoại và địa chỉ của bạn để luôn nhận được những thông báo mới nhất từ CGV!</p>
      </div>
      <div id="support" class="tab-content">
        <h2>Ban Cần Hỗ Trợ</h2>            <p>
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
        <h2>Chương Trình Điểm Thưởng</h2><p>Chương trình bao gồm 4 đối tượng thành viên: U22 | CGV Member | CGV VIP | CGV VVIP, với những quyền lợi và mức ưu đãi khác nhau. Mỗi khi thực hiện giao dịch tại hệ thống rạp CGV, bạn sẽ nhận được một số điểm thưởng tương ứng với cấp độ thành viên:</p>
        
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
  </div>
</section>




  <script>
    function showTab(tabId, button) {
      const tabs = document.querySelectorAll('.tab-content');
      tabs.forEach(tab => tab.classList.remove('active'));
      document.getElementById(tabId).classList.add('active');

      const buttons = document.querySelectorAll('.tabs button');
      buttons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');
    }
  </script>
</body>
</html>
</x-app-layout>