<?php

$birthday = strtotime("2004-01-16");

$differenceInSeconds = $birthday - time();

$differenceInDays = ceil($differenceInSeconds / 60 / 60 / 24);

echo "День рождения наступит через " . $differenceInDays . " дней.";