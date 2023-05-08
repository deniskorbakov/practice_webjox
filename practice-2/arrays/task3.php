<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Информация о погоде</h3>
    <br>
    <form action="" method="post">
        <input type="text" name="city" placeholder="Город">
        <input type="text" name="month" placeholder="Месяц">
        <input type="text" name="year" placeholder="Год">

        <br><br>

        <input type="checkbox" name="weather[]" value="Солнце" />Солнце<br />
        <input type="checkbox" name="weather[]" value="Облака" />Облака<br />
        <input type="checkbox" name="weather[]" value="Дождь" />Дождь<br />
        <input type="checkbox" name="weather[]" value="Снег" />Снег<br />
        <input type="checkbox" name="weather[]" value="Ветер" />Ветер<br />
        <input type="checkbox" name="weather[]" value="Холодно" />Холодно<br />
        <input type="checkbox" name="weather[]" value="Тепло" />Тепло<br />
        
        <br>

        <button type="submit" name="submit">Отправить</button>
    </form>

    <?php
        if(isset($_POST['submit'])) {
            $info = [$_POST['city'], $_POST['month'], $_POST['year']];

            echo "
                <br>
                В городе $info[0] в месяце $info[1] в году $info[2] вы наблюдали
                следующую погоду:
            ";

            $weather = $_POST['weather'];
            
            echo '<ul>';

            foreach($weather as $item) {
                echo "<li>$item</li>";
            }

            echo '</ul>';
        }
    ?>
</body>
</html>