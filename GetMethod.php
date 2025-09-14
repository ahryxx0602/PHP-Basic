<?php
/*
 PHƯƠNG THỨC GET
 GET là một trong những phương thức phổ biến nhất để gửi dữ liệu từ client đến server thoong qua URL.
 Ví dụ: http://example.com/page?name=John&age=30
 Ưu điểm: Dễ chia sẽ dễ debug, phù hợp với tìm kiếm, lọc dữ liệu
 Nhược điểm: Không an toàn, giới hạn độ dài dữ liệu

 $_GET là một biến siêu toàn cục trong PHP dùng để thu thập dữ liệu từ biểu mẫu HTML khi phương thức gửi là GET.
              Cú pháp: $_GET['tên_trường_dữ_liệu']

*/

//?name=John&age=30
?>
<form action="./Getresult.php" method="get">
    Tên: <input type="text" name="name" /> <br/>
    Tuổi: <input type="text" name="age" /> <br/>
    <input type="submit" value="Gửi dữ liệu" />
</form>