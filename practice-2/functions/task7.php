<?php

function checkLowerChars(string $str) {
    echo ctype_lower($str) ? "весь текст в нижнем регистре" : "в тексте есть символы в верхнем регистре";
}

checkLowerChars("Sass");