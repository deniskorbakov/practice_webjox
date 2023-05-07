<?php
  $space = "&nbsp;";
  for($i = 1; $i <= 7; $i++) {
    if($i == 1) {
      echo  str_repeat($space, 2) . "***" . $space . '<br>';
    }
    else if($i == 4) {
      echo "*****" . '<br>';
    }
    else {
      echo "*". str_repeat($space,6). "*" . '<br>';
    }
  }
?>