<?php

function tradeChar(string $str) {
    if(strlen($str) == 1) {
        echo $str . '<br>';
    }
    else {
        $oneChar = substr($str, 0, 1);
        $twoChar = substr($str, -1);
        $middleChars = substr($str, 1, strlen($str) - 2);
    
        echo $twoChar . $middleChars . $oneChar . '<br>';
    }
}

tradeChar("abcd");
tradeChar("a");
tradeChar("xyx");
tradeChar("xy");
tradeChar("abcdwwqwe");