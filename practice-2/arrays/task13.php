<?php

$array = [1,2,3,4,5];

foreach($array as $arr) {
    echo "$arr ";
}

array_splice($array, 3, 0, "$");

echo "<br>";

foreach($array as $arr) {
    echo "$arr ";
}