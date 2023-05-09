<?php

$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

foreach($Color as $col => $v) {
    $Color[$col] = strtolower($v);
}

print_r($Color);

foreach($Color as $col => $v) {
    $Color[$col] = strtoupper($v);
}

echo '<br>';

print_r($Color);