<?php

$ceu = array("Италия" => "Рим", "Люксембург" => "Люксембург", "Бельгия"
=> "Брюссель", "Дания" => "Копенгаген", "Финляндия" => "Хельсинки",
"Франция "=>"Париж", "Словакия"=>"Братислава",
"Словения"=>"Любляна", "Германия"=>"Берлин", "Греция"=>"Афины",
"Ирландия" => "Дублин", "Нидерланды" => "Амстердам", "Португалия" =>
"Лиссабон", "Испания" => "Мадрид", "Швеция" => "Стокгольм",
"Великобритания" => "Лондон", "Кипр"=>"Никосия", "Литва"=>"Вильнюс",
"Чехия"=>"Прага", "Эстония"=>"Таллин"," Польша "=>"Варшава");

foreach($ceu as $key => $value) {
    echo "Страна $key - столица $value" . "<br>";
}