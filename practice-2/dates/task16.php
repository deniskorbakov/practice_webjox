<?php

$date = strtotime("2022-03-15");


echo "начальная дата: " .  date("Y-m-d", $date) . "<br>" . 
" через 40 дней: " . date("Y-m-d", strtotime("+40 day", $date)) . "<br>" . 
" 40 дней назад: " . date("Y-m-d", strtotime("-40 day", $date)); 
