<?php
session_start();
$testing = null;
$testid = null;
if(isset($_GET['testid'])) {
  $testJSON =  file_get_contents('tests/'. 'test' . $_GET['testid'] . '.json');
  $tests = json_decode($testJSON, 'true');
  // echo "<pre>";
  // var_dump($test);
  $_SESSION['test'] = $tests;
  $testing = true;
}
if (isset($_POST[0])) {
    $tests = $_SESSION['test'];
    foreach ($tests as $key => $test) {
        $num = $key + 1;
        if ($_POST[$key] == $test['answer']) {
            echo "Ответ на ".$num." вопрос верен."."\n";
        }
        else {
            echo "Ответ на ".$num." вопрос не верен."."\n";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Форма теста</title>
    <style media="screen">
      form, h1, a {
        margin: 10px auto;
        padding: 0 25% 0;
      }
      fieldset {
        margin: 10px auto;
      }
      input[value="Отправить"] {
        margin: 10px auto;
      }
    </style>
</head>
<body>
  <h1>Ответьте на следющие вопросы</h1>
  <?php if ($testing == true):?>
  <?php foreach ($tests as $key => $test):?>
  <form action="test.php" method="POST">
    <fieldset>
      <legend><?php echo $test['q'];?></legend>
      <label><input type="radio" name="<?php echo $key;?>" value="var1"><?php echo $test["var1"];?></label>
      <label><input type="radio" name="<?php echo $key;?>" value="var2"><?php echo $test["var2"];?></label>
      <label><input type="radio" name="<?php echo $key;?>" value="var3"><?php echo $test["var3"];?></label>
      <label><input type="radio" name="<?php echo $key;?>" value="var4"><?php echo $test["var4"];?></label>
    </fieldset>
  <?php endforeach;?>
    <input value="Отправить" type="submit">
  <?php endif;?>
  </form>
  <p><a href="list.php">К списку загруженных тестов</a></p>
  <p><a href="admin.php">К форме загрузки тестов</a></p>
</body>
</html>
