<?php

$array = [
68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 59, 99, 79, 78,
68, 72, 50 , 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83
];

$middleDeggres = round(array_sum($array) / count($array), 2);

sort($array);

$fiveMax = implode(", ", array_slice($array, 0,5));
$fiveMin = implode(", ", array_slice($array, -5));

echo "Средние значений температур: $middleDeggres" . '<br>';
echo "5 минимальных значений температур: $fiveMax" . '<br>';
echo "5 минимальных значений температур: $fiveMin" . '<br>';