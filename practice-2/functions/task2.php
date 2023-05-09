<?php

function getRectangleArea(int $l, int $w) {
    $area = $l * $w;

    return $area;
}

echo "Прямоугольник длиной 5 и шириной
    5 имеет площадь " . getRectangleArea(5, 5);