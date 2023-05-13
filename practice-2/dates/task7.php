<?php

$date1 = strtotime("2022-05-05");
$date2 = strtotime("2015-01-31");
$diff = $date1 - $date2;
echo round($diff / (60*60*24));
?>