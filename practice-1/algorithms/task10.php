<?php

function multiplicityNumbers(int $number) {
    return (($number % 3) == 0 || ($number % 7) == 0);
}
var_dump(multiplicityNumbers(3));
echo '<br>';
var_dump(multiplicityNumbers(14));
echo '<br>';
var_dump(multiplicityNumbers(12));
echo '<br>';
var_dump(multiplicityNumbers(37));
echo '<br>';