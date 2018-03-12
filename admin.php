<?php
  $outfiles_dir = 'tests/';
  move_uploaded_file($_FILES['outfile']['tmp_name'], $outfiles_dir)
 ?>

 <html>
 <body>
   <h2>Загрузите тест</h2>
   <form action="admin.php" method="POST" enctype="multipart/form-data">
     <input type="file" name="outfile" />
     <input type="submit" value="Отправить" />
   </form>
 </body>
 </html>
