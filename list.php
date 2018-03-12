<?php
    $list = glob('tests/*.json');

    foreach($list as $i => $test) {
        $name = basename($test);
        echo $name,"  ", "Number ", ++$i, "</br>";
    }

?>
