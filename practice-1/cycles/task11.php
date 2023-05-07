<?php

for($i = 1; $i <= 100; $i++) {
    if($i % 3 == 0 && $i % 5 == 0) {
        echo $i . " кратное трем и пяти - wm-school.ru" . '<br>';
    }
    else if($i % 5 == 0) {
        echo $i . " кратное пяти - .ru" . '<br>';
    }
    else if($i % 3 == 0) {
        echo $i . " кратное трем - wm-school" . '<br>';
    }
    else {
        echo $i . " другая кратность" . '<br>';
    }
}