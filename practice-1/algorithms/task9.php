<?php

function plusChur(string $str) {
    if(strlen($str) < 1) {
        echo "длина строки меньше 1 символа";
    }
    else {
        $lastChar = substr($str, -1);
        echo $lastChar . $str . $lastChar . '<br>';
    }
    
}

plusChur("Red");
plusChur("Green");
plusChur("1");