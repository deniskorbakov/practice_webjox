<?php

function absoluteValue($x) {
    return (abs($x - 100) <= 10 || abs($x - 200) <=10);
}

var_dump(absoluteValue(105));
echo '<br>';
var_dump(absoluteValue(90));
echo '<br>';
var_dump(absoluteValue(89));