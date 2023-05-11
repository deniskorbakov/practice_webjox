<?php

$str = "lore wqesdc";

echo preg_match("/lorem/i", $str) ? "строка содержит подстроку - lorem" : "строка не содержит подстроку - lorem";
