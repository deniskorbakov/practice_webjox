<?php

function sumDouble(int $a, int $b) {
    echo ($a == $b) ? ($a+$b) * 3 . '<br>' : $a + $b .'<br>';
}

sumDouble(1,2);
sumDouble(3,2);
sumDouble(2,2);