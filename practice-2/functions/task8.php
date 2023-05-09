<?php

function isPalindrom(string $str) {
    echo $str == strrev($str) ? "строка является палиндромом" : "нет"; 
}

isPalindrom("101");