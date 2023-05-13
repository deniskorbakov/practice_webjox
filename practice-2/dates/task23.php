<?php

echo date("M") . "<br>";

for($i = 1; $i <= 3; $i++) {
    echo date("M", strtotime("-$i month")) . "<br>";
}