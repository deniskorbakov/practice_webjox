<?php

function isSimpleNumber($n) {
    $count = 0;

    for($i = 1; $i <= $n; $i++) {
        if($n % $i == 0) {
            $count++;
        }
    }

    echo $count == 2 ? "$n - простое число" . '<br>' : "$n - не простое число" . '<br>';
}

$array = range(1,100);

array_map('isSimpleNumber', $array);