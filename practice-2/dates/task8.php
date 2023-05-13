<?php

$date = strtotime("2020-02-11");

echo "первый день месяца: " . date('Y-m-01', $date) . " последний день месяца: " . date('Y-m-t', $date);