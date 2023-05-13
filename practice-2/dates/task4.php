<?php
$date1 = strtotime("1980-11-04");
$date2 = strtotime("2021-09-04");

$diff = abs($date2 - $date1);
 
$years = floor($diff / (365*60*60*24));

$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));

$days = floor(($diff - $years * 365*60*60*24 -$months*30*60*60*24)/ (60*60*24));

printf("%d лет, %d месяцев, %d дней", $years,$months,$days);