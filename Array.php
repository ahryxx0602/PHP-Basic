<?php

/*
Mảng Array

Mảng chỉ mục 
Mảng kết hợp
Mảng đa chiều
*/
// $car = array('Toyota', "KIA", "Merc"); // Khai báo cũ

$car = ["Toyota", "KIA", "Merc"];

// Toyota key = 0; value = Toyota
// $car = [(0,"Toyota"), (1, "KIA"), (2, Merc)]

// foreach($car as $item){
//               echo "<br/>", $item;
// }

foreach($car as $key => $value){ // $key , $value tu dat ten
              echo $value, "<br/>";
}

echo "<br/>";
$animal = [
              //key => value
              'cat' => "Mèo",
              'dog' => "Chó",
              'elephant' => "Voi"
];

echo $animal['cat'];
echo "<br/>";

foreach($animal as $key => $value){ // $key , $value tu dat ten
              echo $value, "<br/>";
}
echo "<br/>";

$brand = [
              'Toyota'=>['camry', 'vios', 'veloz', 'fortuner'], 
              'KIA' => ['morning', 'seltos', 'sonet', 'K3'], 
              'Huyndai'=>['i10', 'sentafe', 'accent'],
];

print_r($brand); //Array ( [Toyota] => Array ( [0] => camry [1] => vios [2] => veloz [3] => fortuner ) [KIA] => Array ( [0] => morning [1] => seltos [2] => sonet [3] => K3 ) [Huyndai] => Array ( [0] => i10 [1] => sentafe [2] => accent ) ) 
echo "<br/>";
echo "<br/>";
echo "<hr/>";
var_dump($brand); // array(3) { ["Toyota"]=> array(4) { [0]=> string(5) "camry" [1]=> string(4) "vios" [2]=> string(5) "veloz" [3]=> string(8) "fortuner" } ["KIA"]=> array(4) { [0]=> string(7) "morning" [1]=> string(6) "seltos" [2]=> string(5) "sonet" [3]=> string(2) "K3" } ["Huyndai"]=> array(3) { [0]=> string(3) "i10" [1]=> string(7) "sentafe" [2]=> string(6) "accent" } } 
echo "<br/>";
echo "<br/>";
echo "<hr/>";
echo($brand['Toyota'][0]);

echo "<br/>";
echo "<br/>";
echo "<hr/>";
foreach($brand as $key => $value){
              echo "Hãng xe $key gồm ";
              foreach($value as $item){
                            echo ", ",$item;
                            }
              echo "<br/>";
}

/*
==== CÁC HÀM XỬ LÍ MẢNG ===
count();
in_array($value, $array);
array_keys($array);
array_values($array);
sort($array);
rsort($array);
array_push($array);
array_pop($array);
array_unshift($array, value);
array_shift($array);
array_filter($array, "callback");
array_unique($array);
array_merge($array1, $array2);
explode($delimiter, $string)
implode($delimiter, $array);
*/

//TỐi học