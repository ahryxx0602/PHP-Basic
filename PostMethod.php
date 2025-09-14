<?php
/*
 PHƯƠNG THỨC POST
 POST là một trong những phương thức phổ biến nhất để gửi dữ liệu từ client đến server.
 Ví dụ: http://example.com/page
 Ưu điểm: An toàn hơn GET, không giới hạn độ dài dữ liệu
 Nhược điểm: Khó chia sẽ, khó debug hơn GET

 $_POST là một biến siêu toàn cục trong PHP dùng để thu thập dữ liệu từ biểu mẫu HTML khi phương thức gửi là POST.
 Cú pháp: $_POST['tên_trường_dữ_liệu']

*/

//?name=John&age=30
?>
<form action="./Postresult.php" method="post">
    Username: <input type="text" name="username" /> <br/> <br/>
    Email: <input type="email" name="email" /> <br/> <br/>
    Password: <input type="password" name="password" /> <br/> <br/>
     <label>
        <input type="checkbox" name="agree" />
        I agree to the terms and conditions
    </label> <br/> <br/>
    <input type="submit" value="Đăng ký" />
</form>