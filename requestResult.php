<?php

/*
 PHƯƠNG THỨC REQUEST
 REQUEST là một trong những phương thức phổ biến nhất để gửi dữ liệu từ client đến server.
 Ví dụ: http://example.com/page
 Ưu điểm: An toàn hơn GET, không giới hạn độ dài dữ liệu
 Nhược điểm: Khó chia sẽ, khó debug hơn GET
 tổng hợp cả 2 phương thức GET, POST và COOKIE
 $_REQUEST là một biến siêu toàn cục trong PHP dùng để thu thập dữ liệu từ biểu mẫu HTML khi phương thức gửi là GET, POST hoặc COOKIE.
 Cú pháp: $_REQUEST['tên_trường_dữ_liệu']

//?name=John&age=30
?>
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $agree = isset($_POST['agree']) ? "Yes" : "No";

    echo "Username: " . $username . "<br/>";
    echo "Email: " . $email . "<br/>";
    echo "Password: " . $password . "<br/>";
    echo "Agree to terms: " . $agree . "<br/>";
}
?>