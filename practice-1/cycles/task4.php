<?php

for($i = 1; $i <= 5; $i++) {
    echo str_repeat("*", $i) . '<br>';
    if($i == 5) {
        for($j = 5; $j >= 1; $j--) {
            echo str_repeat("*", $j) . '<br>';
        }
    }
}