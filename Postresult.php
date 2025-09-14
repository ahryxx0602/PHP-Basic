<?php
if(!empty($_POST)){
    // Để tăng tính bảo mật, sử dụng hàm htmlspecialchars để tránh XSS
    // Sử dụng hàm md5 để mã hóa mật khẩu trước khi lưu trữ 
    $username = htmlspecialchars($_POST['username'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $password = htmlspecialchars($_POST['password'] ?? '');
    $hashpassword = md5($password); // Mã hóa mật khẩu
    // Kiểm tra nếu người dùng đồng ý với các điều khoản
    if(isset($_POST['agree'])){
        echo "Hello $username, bạn có email là $email.";
        echo "<br/>";
        echo "Tên: $username <br/> Email: $email <br/> Mật khẩu: $hashpassword";
    }else{
        echo "Bạn cần đồng ý với các điều khoản.";
    }
}



?>