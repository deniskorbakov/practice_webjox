<?php

$array = array (
    "Sophia" => "31", 
    "Jacob" => "41", 
    "William" => "39", 
    "Ramesh" =>"40",
);

echo "Изначальный массив: ";

foreach($array as $key => $value) {
    echo "$key - $value" . '<br>';
}

echo "<br>"."a)";

asort($array);

foreach($array as $key => $value) {
    echo "$key - $value" . '<br>';
}

echo "<br>"."б)";

ksort($array);

foreach($array as $key => $value) {
    echo "$key - $value" . '<br>';
}

echo "<br>"."в)";

arsort($array);

foreach($array as $key => $value) {
    echo "$key - $value" . '<br>';
}

echo "<br>"."г)";

krsort($array);

foreach($array as $key => $value) {
    echo "$key - $value" . '<br>';
}