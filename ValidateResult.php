<?php
$fullName ="";
$error_fullname = "";
$email ="";
$error_email = "";
$password ="";
$error_password = "";
$agree ="";
$error_agree = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["fullname"])){
        $error_fullname = "FullName không được để trống";
    } else{
        $fullName = htmlspecialchars(trim($_POST["fullname"]));
    }

    if(empty($_POST["email"])){
        $error_email = "Email không được để trống";
    } else{
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $error_email = "Email không hợp lệ";
        } else{
            $email = htmlspecialchars(trim($_POST["email"]));
        }
    }

    if(empty($_POST["password"])){
        $error_password = "Password không được để trống";
    } else{
        if(strlen($_POST["password"]) < 6){
            $error_password = "Password phải có ít nhất 6 ký tự";
        } else{
            $password = htmlspecialchars(trim($_POST["password"]));
        }
    }

    if(!isset($_POST["agree"])){
        $error_agree = "Bạn chưa đồng ý điều khoản";
    } else{
        $agree = $_POST["agree"];
    }

    if(!$error_fullname && !$error_email && !$error_password && !$error_agree){
        echo "FullName: " . $fullName . "<br/>";
        echo "Email: " . $email . "<br/>";
        echo "Password: " . $password . "<br/>";
        echo "Agree to terms: " . $agree . "<br/>";
    } else{
        echo "Dữ liệu không hợp lệ. Vui lòng kiểm tra lại!<br/>";
              echo $error_fullname ? $error_fullname . "<br/>" : "";
              echo $error_email ? $error_email . "<br/>" : "";
              echo $error_password ? $error_password . "<br/>" : "";
              echo $error_agree ? $error_agree . "<br/>" : "";
    }
}