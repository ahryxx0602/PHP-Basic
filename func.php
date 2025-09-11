<?php

$name = "Thanh";
function getName($name){
              echo "Hi, I'm ", $name;
}
getName($name);

echo "<br/>";
function calculator($a, $b){
              $ketqua = $a*$b;
              return $ketqua;
}

$ketqua = calculator(2,4);

echo $ketqua;

echo "<br/>";

function calculator2($a, $b){
              $a += 10;
              $b += 10;
              echo "<br/>";
              echo ">>>>>", $a;
              echo "<br/>";
              echo ">>>>>", $b;
              echo "<br/>";
}

$a = 10;
$b = 20;

calculator2($a, $b);

echo ">>", $a, ">>", $b;



function calculator3(&$a, &$b){
              $a += 10;
              $b += 10;
              echo "<br/>";
              echo ">>>>>", $a;
              echo "<br/>";
              echo ">>>>>", $b;
              echo "<br/>";
}
calculator3($a, $b);
echo ">>", $a, ">>", $b;

              echo "<br/>";
//Ham an danh
$GetName = function ($name){
              return $name;
};

echo $GetName("Thanh");
?>