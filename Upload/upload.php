
<?php
// Xử lý file upload
// echo '<pre>';
// print_r($_FILES);
// echo '</pre>';

if($_SERVER['REQUEST_METHOD']=='POST'){
               $file = $_FILES['fileUpload'];
               // Lấy ra thông tin file
                            $fileName = uniqid().$file['name'];// Tạo tên file ngẫu nhiên để tránh trùng lặp
                            $fileTmpName = $file['tmp_name'];
                            $fileSize = $file['size'];
                            $fileError = $file['error'];
                            if($fileError ===0){
                                          // Upload file
                                          $targetDir = './uploads/';
                                           // DI chuyển file từ thư mục tạm thời sang thư mục đích
                                           // move_uploaded_file(đường dẫn file tạm thời, đường dẫn file đích)
                                          if(move_uploaded_file($fileTmpName, $targetDir.$fileName)){
                                                        echo "File đã được upload thành công";
                                          } else {
                                                        echo "File upload thất bại";
                                          }
                                          echo move_uploaded_file($fileTmpName, $targetDir.$fileName);
                            }
}