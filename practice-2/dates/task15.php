<?php

$date = date("l", strtotime("2022-12-22"));

echo $date == "Saturday" || $date == "Sunday" ? "этот день выходный" : "выходные закончились"; 