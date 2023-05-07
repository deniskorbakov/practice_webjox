<?php

function getFactorial($number) {
    $sum = 1;

    for($i = $number; $i > 0; $i--) {
        $sum *= $i;     
    }

    echo $sum;
}

getFactorial(6);