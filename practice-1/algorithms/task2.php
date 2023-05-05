<?php

function difference(int $n) {
    $number = 51;   
    
    echo ($n > $number) ? ($n - $number) * 3 . '<br>' : $number - $n . '<br>'; 
}

difference(53);
difference(30);
difference(51);