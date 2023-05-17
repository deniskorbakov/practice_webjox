<?php

require_once "Worker.php";

use Home\Workers\Developer as Developer;
use Home\Workers\SuperMan as SuperMan;

$user1 = new Developer("разработчик", "Вова", 12, 5000);

echo $user1->getAllData();
echo "<br><br>";
echo $user1->introduceMyself();

echo "<br><br>";

$user2 = new Developer("спасатель", "Гена", 34, 2500);

echo $user2->getAllData();
echo "<br><br>";
echo $user2->introduceMyself();