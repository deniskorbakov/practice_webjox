<?php

function flipString(string $str) {
    for($i = strlen($str); $i >= 0; $i--) {
        echo $str[$i];
    }
}

flipString("string");