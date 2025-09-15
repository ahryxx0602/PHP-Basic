<?php
/*
// Các loại lỗi trong PHP
Parse error : Lỗi cú pháp
Fatal error : Lỗi nghiêm trọng
Warning : Cảnh báo
Notice : Thông báo
Exception (Exception Error) : Lỗi ném ra trong khối try - catch


error_reporting(E_ALL) : Hiển thị tất cả các lỗi
error_reporting(0) : Tắt tất cả các lỗi
ini_set('display_errors', 1) : Hiển thị lỗi
ini_set('display_errors', 0) : Tắt hiển thị lỗi
*/

// Bật hiển thị tất cả các lỗi
ini_set('display_errors', 1); // Hiển thị lỗi
ini_set('display_startup_errors', 1);// Hiển thị lỗi khởi động
error_reporting(E_ALL);

// Lợi ích của việc hiển thị lỗi
// Giúp phát hiện lỗi nhanh chóng
// Giúp gỡ lỗi nhanh chóng
// Giúp cải thiện chất lượng code

// Nhớ comment các
/*
ini_set('display_errors', 1); // Hiển thị lỗi
ini_set('display_startup_errors', 1);// Hiển thị lỗi khởi động
error_reporting(E_ALL);
*/
// dòng này


try {
              $age = 17;
              if($age <18) {
                            // Ném ra lỗi
                            throw new Exception("Bạn chưa đủ tuổi để truy cập vào trang web này");
              }
} catch (Exception $e) {
              //Xử lý lỗi
               echo 'Message: ' .$e->getMessage();
}
?>