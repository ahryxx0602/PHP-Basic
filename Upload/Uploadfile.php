<?php
/*
 Upload file trong PHP
 input type="file"
 $_FILES
*/
?>


<form action="./upload.php" method="post" enctype="multipart/form-data">
              <input type="file" name="fileUpload">
              <button type="submit">Upload</button>
</form>

