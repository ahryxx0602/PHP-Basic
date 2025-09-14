<?php

/*
 PHƯƠNG THỨC REQUEST
 REQUEST là một trong những phương thức phổ biến nhất để gửi dữ liệu từ client đến server.
 Ví dụ: http://example.com/page
 Ưu điểm: An toàn hơn GET, không giới hạn độ dài dữ liệu
 Nhược điểm: Khó chia sẽ, khó debug hơn GET

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


<form action="./requestResult.php" method="post">
    Username: <input type="text" name="username" /> <br/> <br/>
    Email: <input type="email" name="email" /> <br/> <br/>
    Password: <input type="password" name="password" /> <br/> <br/>
     <label>
        <input type="checkbox" name="agree" />
        I agree to the terms and conditions
    </label> <br/> <br/>
    <input type="submit" value="Đăng ký" />
</form>
