<?php 

$dateBirth = new DateTime('16.1.2004');
$now  = new Datetime(date('m.d.y'));

$diff = $now->diff($dateBirth);

printf('Ваш возраст: %d лет, %d месяцев, %d дней', $diff->y, $diff->m, $diff->d);
printf("\n");
?>

