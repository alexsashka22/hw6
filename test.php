<?php
  $dir = 'tests/';
  $list = scandir($dir);
  foreach ($list as $i => $test) {
    if ($i > 1){
      $testplace = "$dir/$test";
      $testJSON = file_get_contents("$testplace");
      $testJS = json_decode($testJSON, 'true');
      foreach ($testJS[0] as $key => $numbJS) {
        if ($_GET["number"] == $numbJS) {
        echo "$testform";
        }
      }
    }
  };

  $testform = "<form action="test.php" method="POST">
  <fieldset>
    <legend><?php echo $testJS[0]['q1'];?></legend>
    <label><input name="q1" type="radio" value="a1"> <?php echo $testJS[0]['q1a1'];?></label>
      <label><input name="q1" type="radio" value="a2"> <?php echo $testJS[0]['q1a2'];?></label>
    <label><input name="q1" type="radio" value="ar"> <?php echo $testJS[0]['q1ar'];?></label>
    <label><input name="q1" type="radio" value="a4"> <?php echo $testJS[0]['q1a4'];?></label>
  </fieldset>
  <fieldset>
    <legend><?php echo $testJS[0]['q2'];?></legend>
    <label><input name="q2" type="radio" value="a1"> <?php echo $testJS[0]['q2a1'];?></label>
    <label><input name="q2" type="radio" value="a2"> <?php echo $testJS[0]['q2a2'];?></label>
    <label><input name="q2" type="radio" value="ar"> <?php echo $testJS[0]['q2ar'];?></label>
    <label><input name="q2" type="radio" value="a4"> <?php echo $testJS[0]['q2a4'];?></label>
  </fieldset>

    <input value="Отправить" type="submit">
  </form>";

if (($_POST['q1'] == 'ar') && ($_POST['q2'] == 'ar')) {
  echo 'Верно';
  } else {
  echo 'Неверно';
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>
    <h2>Введите номер теста.</h2>
	  <form action="test.php" method="GET" >
		  <input type="text" name="number" />
		  <input type="submit" value="Отправить" />
	  </form>
  </body>
</html>
