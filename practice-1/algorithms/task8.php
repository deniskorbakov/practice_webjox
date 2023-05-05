<?php

function copyChar(string $str) {
    if(strlen($str) < 2) {
        echo $str . '<br>';
    }
    else {
        $chars = substr($str, 0, 2);
        echo str_repeat($chars, 4) . '<br>';
    }
    
}

copyChar("C Sharp");
copyChar("JS");
copyChar("a");