<?php

$month_number = date('m') - 1;
if ($month_number == 0) { 
    $month_number = 12;
}
echo "Номер месяца перед текущим: " . $month_number;