<?php

$x = array(1, 2, 3, 4, 5);

var_dump($x);

array_splice($x, 3, -1);

echo '<br>';
var_dump($x);