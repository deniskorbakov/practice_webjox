<?php

/**
 * здесь лучше не использовать функцию для создания полей в select, а использовать сокращенную запись
 * так код выглядит чище и не нужно делать лишних действий
 */

$monthsArr=[
    'Январь'=>31,
    'Февраль'=>'28 дней, если високосный год 29',
    'Март'=>31,
    'Апрель'=>30,
    'Май'=>31,
    'Июнь'=>30,
    'Июль'=>31,
    'Август'=>31,
    'Сентябрь'=>30,
    'Октябрь'=>31,
    'Ноябрь'=>30,
    'Декабрь'=>31
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
    <form action="" method="post">
        <select name="month">
            <?php foreach($monthsArr as $key => $value) : ?>
                <option value="<?=$key;?>"><?=$key;?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="submit">Отправить</button>
    </form>

    <?php

        if(isset($_POST['submit'])) {
            echo "<br>" . $_POST['month'] . " имеет: " .$monthsArr[$_POST['month']] . " дней";
        }
    ?>
</body>
</html>