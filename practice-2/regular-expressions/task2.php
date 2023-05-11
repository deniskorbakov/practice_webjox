<?php

$str = "Быстрая рыжая лиса";

echo preg_replace('/\s+\w+\s*$/u', '', $str);

