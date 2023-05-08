<?php

$strJson = '
{"Название": "Зов кукушки", 
    "Автор": "Роберт Гэлбрейт", "Деталь":
    { "Издатель": "Маленький Браун" }}';

$array = json_decode($strJson, true);

foreach($array as $key => $value) {
    if(is_array($value)) {
        foreach($value as $key => $value) {
            echo "$key: $value ";
        }
    }
    else {
        echo "$key: $value ";
    }
}
