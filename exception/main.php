<?php
function moreFive($x) {
    if ($x > 5) {
        throw new Exception("$x больше 5");
    }

    return $x . "<br>";
}

try {
    echo moreFive(3);
    echo moreFive(5);
    echo moreFive(6);
} catch (Exception $e) {
    echo 'Ошибка - ',  $e->getMessage();
}
