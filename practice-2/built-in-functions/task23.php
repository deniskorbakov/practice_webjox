<?php

$str = 'У лукоморья дуб зелёный златая цепь на дубе том';

$arr = explode(" ", $str);

for($i = 0; $i <= count($arr); $i++) {
   if($i <= 4) {
    echo $arr[$i] . " ";

   }
   else {
    break;
   }
}