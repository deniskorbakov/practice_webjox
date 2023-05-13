<?php

$first_date = "2021-01-01";
$second_date = "2021-09-30";


$date1 = new DateTime($first_date);
$date2 = new DateTime($second_date);

$interval = $date1->diff($date2);

echo "Разница между датами: " . floor($interval->format('%a')/7) . " недель";