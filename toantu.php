<?php
// ==================== TOÁN TỬ SỐ HỌC ====================
$a = 10; 
$b = 3;

echo $a + $b;  // cộng → 13
echo $a % $b;  // chia lấy dư → 1
echo $a ** $b; // lũy thừa → 1000


// ==================== TOÁN TỬ GÁN ====================
$x = 5;
$x += 3; // gán cộng → $x = 8
$x *= 2; // gán nhân → $x = 16


// ==================== TOÁN TỬ SO SÁNH ====================
$a = 5; 
$b = "5";

var_dump($a == $b);   // bằng giá trị → true
var_dump($a === $b);  // bằng cả giá trị & kiểu → false


// ==================== TOÁN TỬ LOGIC ====================
$a = true; 
$b = false;

var_dump($a && $b); // và (AND) → false
var_dump(!$b);      // phủ định (NOT) → true


// ==================== TOÁN TỬ TĂNG / GIẢM ====================
$x = 5;
echo ++$x; // tiền tố (tăng trước) → 6
echo $x--; // hậu tố (in rồi giảm) → 6, sau đó $x = 5


// ==================== TOÁN TỬ CHUỖI ====================
$txt1 = "Hello";
$txt2 = " World";
echo $txt1 . $txt2; // nối chuỗi → Hello World


// ==================== TOÁN TỬ MẢNG ====================
$a = ["a" => "red", "b" => "green"];
$b = ["c" => "blue", "d" => "yellow"];

print_r($a + $b);
// hợp mảng theo key:
// Array ( [a] => red [b] => green [c] => blue [d] => yellow )


// ==================== TOÁN TỬ ĐIỀU KIỆN ====================
$age = 20;
echo ($age >= 18) ? "Trưởng thành" : "Chưa đủ tuổi"; // toán tử 3 ngôi

$name = $_GET['name'] ?? "Guest"; // null coalescing
echo $name; // nếu không có name thì in "Guest"
?>
