<?php
/*
Biến toàn cục và biến cục bộ
Biến toàn cục: Phạm vi cả chương trình
Biến cục bộ: 1Block - 1 Class, ...
*/

$name = "Thanh";

function getName() {
              global $name;
              $firstName = "Phan";
              echo "Ten cua ban la", $firstName, $name;
}
getName();

echo "<br/>";

function number(){
              $a =10;
              $a++;
              echo $a;
}

number();//11
echo "<br/>";
number();//11
echo "<br/>";

function number2(){
              static $a =10;
              $a++;
              echo $a;
}
echo "<hr/>";
number2();
echo "<br/>";
number2();
echo "<br/>";