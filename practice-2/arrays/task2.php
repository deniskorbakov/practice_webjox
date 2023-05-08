<?php
$space = '<br><br>';

$cities = [
'Москва', 
'Киев',
'Минск', 
'Токио', 
'Мехико', 
'Нью-Йорк', 
'Сеул', 
'Шанхай', 
'Лагос',
'Каир', 
'Лондон',
];

foreach($cities as $city) {
    echo $city . ', ';
}

echo $space;

sort($cities);
?>

<ul>
    <?php foreach($cities as $city) : ?>
        <li><?=$city?></li>
    <?php endforeach;?>
</ul>


<?php

echo $space;

array_push($cities, 'Астана', 'Кишинев', 'Душанбе', 'Баку');

sort($cities);
?>

<ul>
    <?php foreach($cities as $city) : ?>
        <li><?=$city?></li>
    <?php endforeach;?>
</ul>



