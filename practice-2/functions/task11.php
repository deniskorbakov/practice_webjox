<?php

$values = [
'солнце', 
'облака', 
'дождь', 
'град', 
'мокрый снег', 
'снег', 
'ветер', 
'холод', 
'тепло',
]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <p>Пожалуйста, введите вашу информацию:</p>

        <input type="text" name="city" placeholder="Введите город"><br><br>
        <input type="text" name="month" placeholder="Введите месяц"><br><br>
        <input type="text" name="year" placeholder="Введите год"><br><br>

        <p>Пожалуйста, введите погодные условия</p>
        <?php foreach($values as $value) :?>
            <input type="checkbox" name="weather[]" value="<?=$value?>"><label><?=$value?></label><br>
        <?php endforeach;?>

        <br>
        <button type="submit" name="submit">Отправить</button>
    </form>

    <?php
        if(isset($_POST['submit'])) {
            echo "<br>" . "В городе: ". $_POST['city'] . " в месяце: " . $_POST['month'] ." - ". $_POST['year'] . " года, вы наблюдали следующую погоду:";

            echo "<ul>";
                foreach($_POST['weather'] as $value) {
                    echo "<li>$value</li>";
                }
            echo "</ul>";
        }
    ?>

</body>
</html>