<?php
    function checkNumber(int $number) {
        if($number > 30) {
            echo "{$number}: больше чем 30" . '<br>';
        }
        else if($number > 20) {
            echo "{$number}: больше чем 20" . '<br>';
        }
        else if($number > 10) {
            echo "{$number}: больше чем 10" . '<br>';
        }
        else {
            echo "{$number}: Введите число не менее 10!" . '<br>';
        }
    }

    checkNumber(33);
    checkNumber(22);
    checkNumber(15);
    checkNumber(7);
?>