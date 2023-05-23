<?php

require_once('vendor/autoload.php');

//данные приложения сделанного в твиче для работы с апи
$secrectKey = "i5p42ckk0a6aankohghvc2dtqr17lg";
$clientId = "aunfpotuqkc7tcbesh6kemslnnfc0l";

$client = new \GuzzleHttp\Client(['verify' => false]);

$url = "https://id.twitch.tv/oauth2/token";

$response = $client->request('POST', $url, [
    'body' => "client_id=$clientId&client_secret=$secrectKey&grant_type=client_credentials",
]);

//получаем токен для апи
$arr = json_decode($response->getBody(), true);

//сделал удобную запись токена для передачи в header
$access_token = ucfirst($arr['token_type']) . " " . $arr['access_token'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li {
            list-style-type: none; /* Убираем маркеры */
            margin-bottom: 20px;
        }

        ul {
            margin-left: 0; /* Отступ слева в браузере IE и Opera */
            padding-left: 0; /* Отступ слева в браузере Firefox, Safari, Chrome */
        }
  </style>
</head>
<body>
    <h2>Получить топ лучших клипов по названию</h2>
    <form method="post">
        <input type="text" name="streamerName" placeholder="Введите название стримера">
        <button type="submit" name="submit">Отправить</button>
    </form>

    <?php
        if(isset($_POST['submit'])) {
            $streamerName = $_POST['streamerName'];
            $url = "https://api.twitch.tv/helix/users?login=$streamerName";

            $response = $client->request('Get', $url, [
                'headers' => [
                    'accept' => 'application/json',
                    'Authorization' => $access_token,
                    'Client-Id' => $clientId,
                ],
            ]);
            
            $arr = json_decode($response->getBody(), true);
            
            $strimerId = $arr["data"][0]["id"];
            
            $url = "https://api.twitch.tv/helix/clips?broadcaster_id=$strimerId&first=5";
            
            $response = $client->request('Get', $url, [
                'headers' => [
                    'accept' => 'application/json',
                    'Authorization' => $access_token,
                    'Client-Id' => $clientId,
                ],
            ]);
            
            $arr = json_decode($response->getBody(), true);
            
            //точка входа для клипов
            $entryPoint = $arr['data'];
    ?>
<center>
    <h3>Топ 5 лучших клипов за все время: <?=$streamerName?></h3>
    <ul>
       <?php foreach($entryPoint as $key => $value) : ?>
            <li>
                <iframe
                    src="https://clips.twitch.tv/embed?clip=<?=$value['id'];?>&parent=localhost"
                    height="500"
                    width="500"
                    allowfullscreen>
                </iframe>

            </li>
        <?php endforeach; ?>
    </ul>
</center>
<?php
    }
?>
</body>
</html>

 