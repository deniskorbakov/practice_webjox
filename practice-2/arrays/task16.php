<?php

$array1 = [[77, 87], [23, 45]];
$array2 = ["wm-school", "ru"];

function addArray(array $arr1, array $arr2) {
    for($i = 0; $i < count($arr1); $i++) {
        array_splice($arr1[$i], 0, 0,$arr2[$i]);
    }

    return $arr1;
}

print_r(addArray($array1, $array2));