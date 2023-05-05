<?php

function deleteChar(string $str, int $number) {
    for($i = 0; $i < strlen($str); $i++) {
        if($i == $number) {
            continue;
        }
        else {
            echo $str[$i];
        }
    }
}

deleteChar("Python", 1);
echo '<br>';
deleteChar("Python", 0);
echo '<br>';
deleteChar("Python", 4);
echo '<br>';