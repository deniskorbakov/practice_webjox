<?php

$str = 'abcde$ddfd @abcd )der]';

echo preg_replace("/[^a-z0-9 ]/i", '' , $str);