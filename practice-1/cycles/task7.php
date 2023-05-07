<?php

function countChar(string $str, string $char) {
    $sum = 0;
    
    for($i = 0; $i < strlen($str); $i++) {
        if($str[$i] == $char) {
            $sum++;
        }
    }

    echo $sum;
}

countChar("www.wm-school.ru", "w");