<?php

function getRectangleArea(int $l, int $w) {
    $area = $l * $w;

    echo "Прямоугольник длиной $l и шириной
    $w имеет площадь $area";
}

getRectangleArea(5, 5);