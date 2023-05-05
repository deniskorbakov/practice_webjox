<?php

function sumTruth(int $one, int $two) {
    $number = 30;
    return (($one + $two) == $number || $one == $number || $two == $number);
}

var_dump(sumTruth(30, 0));
echo '<br>';
var_dump(sumTruth(25, 5));
echo '<br>';
var_dump(sumTruth(20, 30));
echo '<br>';
var_dump(sumTruth(20, 25));