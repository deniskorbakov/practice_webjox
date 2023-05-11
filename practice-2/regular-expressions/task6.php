<?php
$my_text = 'Быстрая рыжая [лиса].';
preg_match('#\[(.*?)\]#', $my_text, $match);
print $match[1]."\n";
?>