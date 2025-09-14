<?php

/*
Đệ quy trong PHP là một kỹ thuật lập trình 
trong đó một hàm gọi chính nó để giải quyết một vấn đề. 
Đệ quy thường được sử dụng để giải quyết các bài toán 
có cấu trúc lặp lại hoặc phân chia thành các phần nhỏ hơn.

*/

function dequy($n)
{
    if ($n <= 1) {
        return 1; // Trường hợp cơ sở
    } else {
        return $n * dequy($n - 1); // Gọi đệ quy
    }
}
echo dequy(5); // Kết quả: 120 (5! = 5 * 4 * 3 * 2 * 1)
?>