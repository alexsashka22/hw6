<?php
 $uploads_dir = "tests";
 foreach ($_FILES["test"] as $key => $error) {
     if ($error == UPLOAD_ERR_OK) {
         $tmp_name = $_FILES["test"]["tmp_name"];
         $name = basename($_FILES["test"]["name"]);
         move_uploaded_file($tmp_name, "$uploads_dir/$name");
     }
 }
 ?>

<html>
<body>
  <h2>Загрузите тест</h2>
  <form action="admin.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="test" />
    <input type="submit" value="Отправить" />
  </form>
</body>
</html>
