<?php

/*
isset() -> Kiểm tra xem 1 biến có tồn tại hay không. (true/false)
empty() -> Kiểm tra 1 biến có rỗng hay không. (true/ false)
*/

$a =10;
var_dump(isset($a));

if(isset($a)){
              echo "biến a tồn tại: ", $a;
} else {
              echo "biến a không tồn tại";
}

var_dump(empty($a)); //false

$b = null || 0;

var_dump(empty($b)); // true