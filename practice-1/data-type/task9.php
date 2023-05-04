<?php
    $url = parse_url('https://wm-school.ru/php/php_exercises.php');
    echo "scheme: " . $url['scheme'] .'<br>'. "host: " . $url['host'] . '<br>' . "path: " . $url['path'];
?>