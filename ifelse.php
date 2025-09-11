<?php 
              $thanh = 21;
              if($thanh >=18){
                            echo "Trưởng thành";
              } else {
                            echo "Chưa đủ tuổi";
              }

              $age = 20;
           $ketqua = ($age >= 18) ? "Trưởng thành" : "Chưa đủ tuổi"; // toán tử 3 ngôi
           echo $ketqua;
?>