<?php
/* Cookies trong PHP
- setcookie(name, value, expire, path, domain, secure, httponly);// Tạo cookie

name : Tên cookie
value : Giá trị cookie
expire : Thời gian tồn tại của cookie (tính theo giây)
path : Đường dẫn mà cookie có hiệu lực
domain : Tên miền mà cookie có hiệu lực
secure : Chỉ gửi cookie qua kết nối HTTPS
httponly : Chỉ cho phép truy cập cookie thông qua HTTP (không cho phép truy cập thông qua JavaScript)


- getcookie(name) : Lấy giá trị cookie
- unsetcookie(name) : Xóa cookie

$_REQUEST : $_GET + $_POST + $_COOKIE
$_COOKIE : Mảng chứa tất cả các cookie
*/

setcookie(('username'), 'admin', time()+3600, '/'); 
setcookie(('thanh'), 'user', time()+3600, '/'); 
// Tạo cookie có tên là username, giá trị là admin, thời gian tồn tại là 1 giờ, có hiệu lực trên toàn bộ trang web
if(isset($_COOKIE['username'])){
               echo '<pre>';
               print_r($_COOKIE);
               echo '</pre>';
} else {
               echo "Cookie không tồn tại hoặc đã hết hạn";
}
// Xóa cookie
setcookie('username', '', time()-3600, '/');
setcookie('thanh', '', time()-3600, '/');
?>