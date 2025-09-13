<?php
/*
Xử lí mảng
count() đếm số phần tử trong mảng
in_array($value, array) kiểm tra giá trị có trong mảng hay không
array_keys(array) trả về tất cả các key trong mảng
array_values(array) trả về tất cả các value trong mảng
sort(array) sắp xếp mảng theo thứ tự tăng dần
rsort(array) sắp xếp mảng theo thứ tự giảm dần
array_push(array, value1, value2, ...) thêm phần tử vào cuối mảng
array_pop(array) xóa phần tử cuối mảng và trả về phần tử đó
array_unshift(array, value1, value2, ...) thêm phần tử vào đầu mảng
array_shift(array) xóa phần tử đầu mảng và trả về phần tử đó
array_filter(array, "callback") lọc phần tử trong mảng
array_unique(array) loại bỏ các phần tử trùng lặp trong mảng
array_merge(array1, array2, ...) hợp nhất các mảng
explode(delimiter, string) tách chuỗi thành mảng
implode(delimiter, array) nối mảng thành chuỗi
*/
//count()

$animal = [
              'cat' => "Mèo",
              'dog' => "Chó",
              'elephant' => "Voi"
];

echo "Số phần tử trong mảng animal là: ", count($animal); //3
echo "<br/>";

//in_array($value, array)
if(in_array("Chó", $animal)){
              echo "Có con Chó trong mảng animal";
}
echo "<br/>";
//array_keys(array)
print_r(array_keys($animal)); //Array ( [0] => cat [1] => dog [2] => elephant )
echo "<br/>";
//array_values(array)
print_r(array_values($animal)); //Array ( [0] => Mèo [1] => Chó [2] => Voi )
echo "<br/>";
//sort(array)
sort($animal);
print_r($animal); //Array ( [0] => Chó [1] => Mèo [2] => Voi )
echo "<br/>";
//rsort(array)
rsort($animal);
print_r($animal); //Array ( [0] => Voi [1] => Mèo [2] => Chó )
echo "<br/>";
//array_push(array, value1, value2, ...)
array_push($animal, "Cá", "Chim");
print_r($animal); //Array ( [0] => Voi [1] => Mèo [2] => Chó [3] => Cá [4] => Chim )
echo "<br/>";
//array_pop(array)
$last_animal = array_pop($animal);
echo "Phần tử bị xóa là: ", $last_animal; //Chim
print_r($animal); //Array ( [0] => Voi [1] => Mèo [2] => Chó [3] => Cá )
echo "<br/>";
//array_unshift(array, value1, value2, ...)
array_unshift($animal, "Heo", "Bò");
print_r($animal); //Array ( [0] => Heo [1] => B
// [2] => Voi [3] => Mèo [4] => Chó [5] => Cá )
echo "<br/>";
//array_shift(array)
$first_animal = array_shift($animal);
echo "Phần tử bị xóa là: ", $first_animal; //Heo
print_r($animal); //Array ( [0] => Bò [1] => Voi [2] => Mèo [3] => Chó [4] => Cá )
echo "<br/>";
//array_filter(array, "callback")
function filter_animal($value){
              return strlen($value) > 2; //lọc các phần tử có độ dài > 2
}
$filtered_animal = array_filter($animal, "filter_animal");
print_r($filtered_animal); //Array ( [0] => Bò [1]
// [2] => Voi [3] => Mèo [4] => Chó [5] => Cá )
echo "<br/>";
//array_unique(array)
$duplicate_animal = ['Mèo', 'Chó', 'Voi', 'Mèo', 'Chó'];
$unique_animal = array_unique($duplicate_animal);
print_r($unique_animal); //Array ( [0] => Mèo [1] => Chó [2] => Voi )
echo "<br/>";
//array_merge(array1, array2, ...)
$animal1 = ['Mèo', 'Chó'];
$animal2 = ['Voi', 'Cá'];
$merged_animal = array_merge($animal1, $animal2);
print_r($merged_animal); //Array ( [0] => Mèo [1] => Chó [2] => Voi [3] => Cá )
echo "<br/>";
//explode(delimiter, string)
$string = "Mèo,Chó,Voi,Cá";
$array_from_string = explode(",", $string);
print_r($array_from_string); //Array ( [0] => Mèo [1] => Chó [2] => Voi [3] => Cá )
echo "<br/>";
//implode(delimiter, array)
$imploded_string = implode(" - ", $array_from_string);
echo $imploded_string; //Mèo - Chó - Voi - Cá
echo "<br/>";
//Tổng hợp
$animal = [
              'cat' => "Mèo",
              'dog' => "Chó",
              'elephant' => "Voi"
];
?>