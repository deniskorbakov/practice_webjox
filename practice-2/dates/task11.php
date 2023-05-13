<?php
$date1 = strtotime("1980-11-04 13:21:34");
$date2 = strtotime("2021-09-04 22:23:23");

$diff = abs($date2 - $date1);
 
$years = floor($diff / (365*60*60*24));

$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));

$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));

$hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));

$minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);

$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60));


printf("%d лет, %d месяцев, %d дней, %d часов, %d минут, %d секунд", $years, $months, $days, $hours, $minutes, $seconds);