<?php
 $uploads_dir = "tests";
 foreach ($_FILES["test"] as $error) {
     if ($error == UPLOAD_ERR_OK) {
         $tmp_name = $_FILES["test"]["tmp_name"];
         $name = basename($_FILES["test"]["name"]);
         move_uploaded_file($tmp_name, "$uploads_dir/$name");
         // echo "<pre>";
         // var_dump($_FILES);
     }
 }
 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <style media="screen">
    form, h1, a {
      margin: 10px auto;
      padding: 0 25% 0;
    }
    input[value="Отправить"] {
      margin: 10px auto;
    }
  </style>
</head>
<body>
  <h1>Загрузите тест в формате JSON</h1>
  <form action="admin.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="test">
    <input type="submit" value="Отправить" />
  </form>
  <a href="list.php">К списку загруженных тестов</a>
</body>
</html>
