<?php

$seconds = 200000;

$days = floor($seconds / 86400);
$seconds -= $days * 86400;

$hours = floor($seconds / 3600);
$seconds -= $hours * 3600;

$minutes = floor($seconds / 60);
$seconds -= $minutes * 60;

echo "Дни: " . $days . "<br>";
echo "Часы: " . $hours . "<br>";
echo "Минуты: " . $minutes . "<br>";
echo "Секунды: " . $seconds . "<br>";