<?php
$name1 = "Ивана";
$name2 = "Карла";
$name3 = "Степана";

$salary1=1000;
$salary2=1200;
$salary3=1400;

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      table {
        border-collapse: collapse;
        border: 1px solid black;
      }

      td {
        
        border: 1px solid black
      }

      .blue {
        color: blue;
      }
    </style>
</head>
<body>
    <?php
      echo "
        <table>
          <tr> <td class='blue'>Зарплата $name1</td> <td>$salary1$</font></td></tr> 
          <tr> <td class='blue'>Зарплата $name2</td> <td>$salary2$</font></td></tr> 
          <tr> <td class='blue'>Зарплата $name3</td> <td>$salary3$</font></td></tr> 
        </table>
      ";
    ?>
</body>
</html>