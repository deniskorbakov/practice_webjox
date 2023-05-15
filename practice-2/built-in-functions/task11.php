<?php

$string1 = "wm-school";
$string2 = "wm-schul";

$pos = strspn($string1 ^ $string2, "\0");

if ($pos < strlen($string1) || $pos < strlen($string2)) {
  echo "Первое различие между двумя строками в позиции " . ($pos) . ": \"" . $string1[$pos] . "\" и \"" . $string2[$pos] . "\"";
} else {
  echo "Две строки идентичны";
}
?>
