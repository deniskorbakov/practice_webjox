<?php

function checkString(string $str) {
    echo ($str == 'if else') ? $str : 'if ' . $str;
}

checkString('if else');
echo '<br>';
checkString('else');