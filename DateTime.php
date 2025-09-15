<?php

/*
DATE TIME trong PHP
date() : Lấy ra ngày tháng năm hiện tại
date_default_timezone_set('Asia/Ho_Chi_Minh') : Cài đặt múi giờ
UTC+7 : Giờ Việt Nam
America/New_York : Giờ New York
Europe/London : Giờ London

time() : Lấy ra time stamp hiện tại
strtotime(string) : Chuyển đổi chuỗi thời gian sang time stamp
- Y: Năm (4 chữ số)
- m: Tháng (2 chữ số)
- d: Ngày (2 chữ số)
- H: Giờ (2 chữ số, định dạng 24h)
- i: Phút (2 chữ số)
- s: Giây (2 chữ số)
*/
date_default_timezone_set('Asia/Ho_Chi_Minh');
echo date('Y-m-d H:i:s');
echo '<br>';
echo time();
echo '<br>';
echo "2024-06-01 12:00:00", strtotime('2024-06-01 12:00:00');
echo '<br>';
echo "next day", strtotime(("next day"));
echo '<br>';
echo "next month", strtotime(("next month"));
echo '<br>';

echo date('Y-m-d H:i:s', strtotime('2024-06-01 12:00:00'));
echo '<br>';