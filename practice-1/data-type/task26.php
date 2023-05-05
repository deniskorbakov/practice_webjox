<?php
    $path =  $_SERVER['DOCUMENT_ROOT'];
    $strExplode = explode('\\',$path);

    echo "абсолютный путь до корневой папки " . $path . '<br>';
    echo "корневая папка во вход в проект: " . $strExplode[count($strExplode) - 1];
?>