<?php
if(!empty($_GET)){
    $name = $_GET['name'] ?? '';
    $age = $_GET['age'] ?? '';
    echo "Hello $name, bạn $age tuổi.";
    echo "<br/>";
    echo "Tên: $name <br/> Tuổi: $age";
}



?>