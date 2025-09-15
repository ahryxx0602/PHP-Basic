<?php
/*
SESSION trong PHP
session : Phiên làm việc là nơi lưu trữ thông tin người dùng trên server
cho mỗi người dùng sẽ có một phiên làm việc riêng biệt
khác với cookie là lưu trữ thông tin trên trình duyệt của người dùng an toàn hơn cookie

- session_start() : Khởi tạo session bắt buộc phải gọi hàm này trước khi sử dụng session
- $_SESSION : Mảng toàn cục dùng để lưu trữ thông tin của session

*/

session_start();// Khởi tạo session
$_SESSION['username'] = 'admin';
// username là tên của session, admin là giá trị của session
$_SESSION['email'] = 'admin@example.com';
// email là tên của session, admin@example.com là giá trị của session
// Kiểm tra session
if(isset($_SESSION['username'])){
              echo '<pre>';
               echo "Username: ".$_SESSION['username'];
               echo '<br>';
               echo "Email: ".$_SESSION['email'];
} else {
               echo "Session không tồn tại hoặc đã hết hạn";
}
echo '<pre>';
print_r($_SESSION);

// xóa session
session_unset(); // Xóa tất cả các biến session
session_destroy(); // Hủy session
?>