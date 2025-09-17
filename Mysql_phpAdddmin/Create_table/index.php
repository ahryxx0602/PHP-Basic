<?php
/*
-- Create database, create table

-Kiểu dữ liệu dùng trọng SQL
+ char: Chuỗi ký tự có độ dài cố định
+ varchar: Chuỗi ký tự có độ dài biến đổi
+ text: Chuỗi ký tự có độ dài lớn
+ int: Số nguyên
+ float: Số thực
+ date: Ngày tháng năm (YYYY-MM-DD)
+ datetime: Ngày tháng năm giờ phút giây (YYYY-MM-DD H:i:s)
+ timestamp: Dấu thời gian
+ boolean: Giá trị đúng sai (true/false)
+ enum: Kiểu liệt kê
+ set: Tập hợp các giá trị

===============
--Khóa chính (Primary Key)
Định nghĩa:
+ Khóa chính là một trường (hoặc tập hợp các trường) trong một bảng,
có nhiệm vụ duy nhất để xác định mỗi bản ghi trong bảng đó.
+ Mỗi bảng chỉ có thể có một khóa chính giá trị của khóa chính phải là duy nhất

--Khóa ngoại (Foreign Key)
Định nghĩa:
+ Khóa ngoại là một trường (hoặc tập hợp các trường) trong một bảng,
mà giá trị của nó tham chiếu đến khóa chính trong bảng khác.
+ Khóa ngoại được sử dụng để thiết lập và thực thi mối quan hệ giữa hai bảng trong cơ sở dữ liệu.

Mối quan hệ giữa khóa chính và khóa ngoại:
1 - n
+ Một bản ghi trong bảng cha có thể liên kết với nhiều bản ghi trong bảng con.
1 - 1
+ Một bản ghi trong bảng cha chỉ liên kết với một bản ghi trong bảng con.

INNER JOIN
+ Lấy dữ liệu từ hai bảng trở lên dựa trên mối quan hệ giữa chúng.
VDD:
SELECT table1.name, table2.lesson
FROM table1
INNER JOIN table2 ON table1.primary_key = table2.foreign_key;


====
Kết nối PHP với MySQL bằng PDO: Bảo mật linh hoạt hơn MySQLi


*/


$host = 'localhost';
$dbname = 'php_co_ban';
$username = 'root';
$password = '';

try{
              $options = array(
                            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // Hỗ trợ tiếng việt
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Đẩy lỗi vào ngoại lệ
              );
              // Kết nối với MySQL sử dụng PDO
              $conn = new PDO ("mysql:host=$host; dbname=$dbname", $username, $password, $options);
              echo "Kết nối thành công";
              // $sql = "INSERT INTO users (name) VALUES(:name)";
              // $sql = "UPDATE users SET name = :name WHERE id = :id";
              // $sql = "DELETE FROM users WHERE id = :id";
              $sql = "SELECT * FROM users";
              
              
              $stm = $conn -> prepare($sql); // Chuẩn bị câu lệnh SQL

              // //Dữ liệu cần Insert/Xoa/Update
              // $names = ['Nguyễn Văn A', 'Trần Thị B', 'Lê Văn C'];
              // $name = 'Nguyễn Văn A';
              // $id = 0;
              
              // $stm -> execute([':name' => $name]);
              // $stm->execute([
              //               ':name' => $name,
              //               ':id' => $id
              // ]);
              // foreach ($names as $name) {
              //     $stm->execute([':name' => $name]);
              // }
              $stm -> execute(); // Thực thi câu lệnh SQL
              $users = $stm -> fetchAll(PDO::FETCH_ASSOC); // Lấy tất cả kết quả trả về
              echo "<pre>";
              print_r($users);
}catch(PDOException $e){
              echo "Lỗi kết nối: " . $e->getMessage();
}

?>