<?php

function trade(int $a, int $b) {
    $c = $a;
    $a = $b;
    $b = $c;

    echo "a = {$a} b = {$b}";
}

trade(5,10);