<?php
$countries = [
    ["Город", "Страна", "Континент"],
    ["Токио", "Япония", "Азия"],
    ["Мехико", "Мексика", "Северная Америка"],
    ["Нью-Йорк", "США", "Северная Америка"],
    ["Мумбаи", "Индия", "Азия"],
    ["Сеул", "Корея", "Азия"],
    ["Шанхай", "Китай", "Азия"],
    ["Лагос", "Нигерия", "Африка"],
    ["Буэнос-Айрес", "Аргентина", "Южная Америка"],
    ["Каир", "Египет", "Африка"],
    ["Лондон", "Великобритания", "Европа"]
];
?>

<!DOCTYPE html>
<html>
<head>
 <title>Массив в HTML таблице</title>
 <style type="text/css">
  td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
  th {text-align:center;}
  table {border-collapse: collapse; border: 1px solid black;}
 </style>
</head>
<body>
 <table>
  <?php
  foreach ($countries as $row) {
   echo "<tr>";
   foreach ($row as $cell) {
    echo "<td>$cell</td>";
   }
   echo "</tr>";
  }
  ?>
 </table>
</body>
</html>