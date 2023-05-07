<?php
$number = 'B00';
for($i = 0; $i != 99; $i++) {
    if($i % 18 == 0) {
        echo '<br>';
    }

    echo substr($number, 1,2) . ' , ';
    
    $number++;
}