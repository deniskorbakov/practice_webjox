<?php

$str = "120303";

$arr = str_split($str);

for($i = 0; $i <= count($arr); $i++) {
    if($i > 0 && $i < count($arr) - 1 && $i % 2 == 0) {
        echo ":";
        echo $arr[$i];
        
    }
    else {
        echo $arr[$i];
    }
}
