<?php
    // версия апи
    $version = '5.131';

    // ключ доступа
    $access_token = '8cabd1728cabd1728cabd1724e8fbff34988cab8cabd172e8cc7b061ba94a0638feaccd';
    
    $url = "https://api.vk.com/method/friends.get?user_id=256215124&order=random&fields=photo_max,city,sex,last_seen&count=5&access_token=$access_token&v=$version";
    
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);

    $response = curl_exec($ch);

    curl_close($ch);
    
    $arr = json_decode($response, true);

    $entryPoint = $arr["response"]["items"];
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
    <center>
        <?php for($i = 0; $i < count($entryPoint); $i++) : ?>
            <h4>Имя: <?= $entryPoint[$i]["first_name"];?></h4>
            <h4>Фамилия: <?= $entryPoint[$i]["last_name"];?></h4>
            <p>Id пользователя: <?= $entryPoint[$i]["id"];?></p>
            <p>Город: <?= !empty($entryPoint[$i]["city"]["title"]) ? $entryPoint[$i]["city"]["title"] : "не указан";?></p>
            <p>Пол: <?= $entryPoint[$i]["sex"] === 1 ? "Женский" : "Мужской"?></p>
            <p>последний визит в <?= date("H:i:s",$entryPoint[$i]["last_seen"]["time"]);?></p>
            <img src="<?=$entryPoint[$i]["photo_max"];?>">
            <br><br>
        <?php endfor; ?>
    </center>
</body>
</html>
