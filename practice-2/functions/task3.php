<?php

function getFact($n) {
    $count = 1;

    for($i = $n; $i > 1; $i--) {
        $count *= $i;
    }

    echo "для n = $n: $count";
}

getFact(5);