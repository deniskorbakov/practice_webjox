<?php

$filename = 'task16.php';
if (file_exists($filename)) {
    echo "В последний раз файл $filename был изменён: " . date ("F d Y H:i:s.", filemtime($filename));
}

?>