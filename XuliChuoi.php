<?php
/*
. (dấu chấm) nối chuỗi
Hàm Xử lí chuỗi
strlen(string) trả về độ dài chuỗi
str_word_count(string) đếm số từ trong chuỗi "Không hỗ trợ tiếng Việt"
strrev(string) đảo ngược chuỗi 
strpos(haystack, needle) tìm vị trí xuất hiện đầu tiên của chuỗi con trong chuỗi


str_replace(search, replace, subject) thay thế chuỗi con trong chuỗi
substr(string, start, length) cắt chuỗi theo vị trí
strtolower(string) chuyển chuỗi thành chữ thường
strtoupper(string) chuyển chuỗi thành chữ hoa
ucfirst(string) viết hoa chữ cái đầu tiên của chuỗi
ucwords(string) viết hoa chữ cái đầu tiên của mỗi từ trong chuỗi
trim(string) loại bỏ khoảng trắng thừa ở đầu và cuối chuỗi
ltrim(string) loại bỏ khoảng trắng thừa ở đầu chuỗi
rtrim(string) loại bỏ khoảng trắng thừa ở cuối chuỗi
explode(delimiter, string) tách chuỗi thành mảng
implode(delimiter, array) nối mảng thành chuỗi


strcmp(string1, string2) so sánh hai chuỗi
strcasecmp(string1, string2) so sánh hai chuỗi không phân biệt hoa thường


str_pad(string, length, pad_string, pad_type) chèn thêm ký tự vào chuỗi
strip_tags(string) loại bỏ thẻ HTML và PHP khỏi chuỗi tăng bảo mật
htmlspecialchars(string) chuyển các ký tự đặc biệt thành thực thể HTML


Hàm mã hóa chuỗi
md5(string) mã hóa chuỗi thành chuỗi 32 ký tự hex thường dùng để mã hóa mật khẩu
sha1(string) mã hóa chuỗi thành chuỗi 40 ký tự hex
base64_encode(string) mã hóa chuỗi thành chuỗi có thể in được
base64_decode(string) giải mã chuỗi đã được mã hóa bằng base64_encode()

*/


$a = "Phan Van";

$b = " Thanh";

$c = $a . $b;

echo $c; // Phan Văn Thành
echo "<br/>";
echo $a.$b;
echo "<br/>";
echo "Độ dài chuỗi c là: ", strlen($c); //15
echo "<br/>";
echo "Độ dài chuỗi c là: ", strlen($a . $b); //15
echo "<br/>";
echo "Số từ trong chuỗi c là: ", str_word_count($c); //3
echo "<br/>";
echo "Chuỗi c đảo ngược là: ", strrev($c); //hànhT nàV nahP
echo "<br/>";
echo "Vị trí xuất hiện đầu tiên của chuỗi 'Phan' trong chuỗi c là: ", strpos($c, "Phan"); //0
echo "<br/>";
echo "Thay thế 'Van' thành 'Minh' trong chuỗi c: ", str_replace("Van", "Minh", $c); //Phan Minh Thanh
echo "<br/>";
echo "Cắt chuỗi c từ vị trí 5 độ dài 3 là: ", substr($c, 4); //Van Thành
echo "<br/>";
echo "Cắt chuỗi c từ vị trí 5 độ dài 3 là: ", substr($c, 4, 3); //Van
echo "<br/>";
echo "Chuỗi c viết thường là: ", strtolower($c); //phan van thanh
echo "<br/>";
echo "Chuỗi c viết hoa là: ", strtoupper($c); //PHAN VAN THANH
echo "<br/>";
echo "Chuỗi c viết hoa chữ cái đầu tiên là: ", ucfirst($c); //Phan Van Thanh
echo "<br/>";
echo "Chuỗi c viết hoa chữ cái đầu tiên của mỗi từ là: ", ucwords($c); //Phan Van Thanh
echo "<br/>";
$d = "   phanvanthanh   ";
echo "Chuỗi d sau khi loại bỏ khoảng trắng thừa ở đầu và cuối là: '", trim($d), "'"; //'Xin chào các bạn'
echo "<br/>";
echo "Chuỗi d sau khi loại bỏ khoảng trắng thừa ở đầu là: '",
ltrim($d), "'"; //'Xin chào các bạn   '
echo "<br/>";
echo "Chuỗi d sau khi loại bỏ khoảng trắng thừa ở cuối là: '",
rtrim($d), "'"; //'   phanvanthanh'
echo "<br/>";
$e = "Học lập trình PHP";
$f = explode(" ", $e);
print_r($f); //Array ( [0] => Học [1] => lập [2] => trình [3] => PHP )
echo "<br/>";
echo implode(" ", $f); //Học lập trình PHP
echo "<br/>";
$g = "abc";
$h = "Abc";
echo "<br/>";
echo "g : $g || h : $h";
echo "<br/>";
if(strcmp($g, $h) == 0){
              echo strcmp($g, $h);
              echo "<br/>Hai chuỗi g và h bằng nhau";
}else{
              echo "<br/>Hai chuỗi g và h khác nhau"; //Hai chuỗi g và h khác nhau
}
echo "<br/>";
if(strcasecmp($g, $h) == 0){
              echo strcasecmp($g, $h);
              echo "<br/>Hai chuỗi g và h bằng nhau"; //Hai chuỗi g và h bằng nhau
}else{
              echo "<br/>Hai chuỗi g và h khác nhau";
}
echo "<br/>";
echo str_pad($g, 10, "*", STR_PAD_BOTH); //****abc****
$i = "<b>Xin chào</b> các bạn <i>lập trình</i> PHP";
echo "<br/>";
echo strip_tags($i); //Xin chào các bạn lập trình PHP
echo "<br/>";
$j = "<script>alert('Hello');</script>";
echo $j; //<script>alert('Hello');</script>
echo "<br/>";
echo htmlspecialchars($j); //&lt;script&gt;alert('Hello'); &lt;/script&gt;
echo "<br/>";
$pasword = "123456";
echo "Mật khẩu ban đầu: $pasword"; //Mật khẩu ban đầu: 123456
echo "<br/>";
echo "Mật khẩu sau khi mã hóa md5: ", md5($pasword); //Mật khẩu sau khi mã hóa md5: e10adc3949ba59abbe56e057f20f883e
echo "<br/>";
echo "Mật khẩu sau khi mã hóa sha1: ", sha1($pasword); //Mật khẩu sau khi mã hóa sha1: 7c4a8d09ca3762af61e59520943dc26494f8941b
echo "<br/>";
$k = "PHP là ngôn ngữ lập trình web phổ biến";
$encoded_k = base64_encode($k);
echo "Chuỗi k sau khi mã hóa base64: $encoded_k"; //Chuỗi k sau khi mã hóa base64: UERIIHThuZyBuZ8OqbiBs4bqtdGluZyB3ZWIgcGjDqm4gYm5oYWI=
echo "<br/>";
echo "Chuỗi k sau khi giải mã base64: ", base64_decode($encoded_k); //Chuỗi k sau khi giải mã base64: PHP là ngôn ngữ lập trình web phổ biến
echo "<br/>";
?>