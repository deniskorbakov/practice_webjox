<?php

$date = strtotime("2022-12-02");

$week = date("W", $date);

echo "пример недели: " . $week . " пример года: " . date("Y", $date) . "<br>";

echo "начало недели: " . date("Y-m-d", strtotime("monday this week", $date)) . "<br>";
echo "окончание недели: " . date("Y-m-d", strtotime("sunday this week", $date));

