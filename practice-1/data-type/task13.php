<?php
    error_reporting(E_ERROR);
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
        <input type="email" name="email" placeholder="input email">
        <button type="submit">add email</button>
    </form>

    <?php
        echo (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) ? "yes" : "no";
    ?>
</body>
</html>