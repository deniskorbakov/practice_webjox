<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="length" placeholder="Введите длину">
        <br>
        <input type="text" name="width" placeholder="Введите ширину">
        <br>
        <button type="submit" name="submit">Получить результат</button>
    </form>

    <?php

        if(isset($_POST['submit'])) {
            $l = $_POST['length'];
            $w = $_POST['width'];
    
            function getRectangleArea($l, $w) {
                $area = $l * $w;
            
                return $area;
            }
    
            echo "Прямоугольник длиной $l и шириной
            $w имеет площадь " . getRectangleArea($l,$w);
        }

    ?>
</body>
</html>