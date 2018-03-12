<?php
    $list_dir = "tests/";
    $list = scandir($list_dir);

    foreach($list as $i => $test) {
        $name = basename($test);
        echo $name,"  ", "Number ", $i++, "</br>";
    }

?>
