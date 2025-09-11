<?php 
/*
INCLUDE, INCLUDE_ONCE, REQUIRE, REQUIRE_ONCE: Nhúng file php
include: (Nhúng nhiều lần) -> gặp lỗi -> Tiếp tục chạy
include_once: (Chỉ một lần) -> gặp lỗi -> Tiếp tục chạy
require: (Nhúng nhiều lần) -> Gặp lỗi dừng chương trình
require_once: (Chỉ một lần) -> Gặp lỗi dừng chương trình
*/
include "./help.php";

$name = "Thanh";
printYourName($name);