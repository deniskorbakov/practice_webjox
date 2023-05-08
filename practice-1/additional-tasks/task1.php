<?php
/*  Вложенные циклы:
*
*    1)
*    С помощью двух вложенных циклов выведите на экран следующую строку:
*    111222333444555666777888999
*
*    2)
*    С помощью двух вложенных циклов выведите на экран следующую строку:
*    11 12 13 21 22 23 31 32 33
*
*    3)
*    "Рисование" символами. Выведите на экран числа в следующем виде:
*
*    1
*    2  2
*    3  3  3
*    4  4  4  4
*    5  5  5  5  5
*    и т.д.
*
*    4)
*    отрисовать шахматную доску с черно-былыми квадратами
*
*/

//1)

for($i = 1; $i <= 9; $i++) {
    for($j = 1; $j <=3; $j++) {
        echo $i;
    }
}

echo '<br>' . '<br>';

//2)

for($i = 1; $i <= 3; $i++) {
    for($j = 1; $j <= 3; $j++) {
        echo $i . $j . " ";
    }
}

echo '<br>' . '<br>';

//3)

for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= 5; $j++) {
        if($i >= $j) {
            echo $i;
        }
    }

    echo '<br>';
}

echo '<br>' . '<br>';

//4)

?>
<!DOCTYPE html>
<html> 
<head> 
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body> 

<table border='1' style='border-collapse:collapse;'>

<?php
for($i = 1;$i <=8 ;$i++)
{
  echo "<tr>";
  for($j = 1;$j <= 8;$j++)
  { 
    if($i % 2 != 0) {
        if($j % 2 == 0) {
            echo "<td width='25px' height='25px' bgcolor=#000000></td>";
        }
        else {
            echo "<td width='25px' height='25px'></td>";
        }
    }
    else {
        if($j % 2 != 0) {
            echo "<td width='25px' height='25px' bgcolor=#000000></td>";
        }
        else {
            echo "<td width='25px' height='25px'></td>";
        }
    }
    
  }
  echo "</tr>";
}
?>
</table>
</body>
</html>