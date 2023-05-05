<?php

function comparisonVersion(string $version) {
    if (version_compare(PHP_VERSION, $version) > 0) {
        echo "текущая версия выше чем - {$version}";
     }
     else if(version_compare(PHP_VERSION, $version) < 0) {
        echo "текущая версия ниже чем - {$version}";
     }
     else {
        echo "они равны";
     }
}

comparisonVersion('8.2.4');

?>