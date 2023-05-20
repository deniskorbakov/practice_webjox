<?php

require_once('vendor/autoload.php');

date_default_timezone_set('Europe/Moscow');


// версия апи
$version = '5.131';

// ключ доступа
$access_token = '8cabd1728cabd1728cabd1724e8fbff34988cab8cabd172e8cc7b061ba94a0638feaccd';

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

<h2>Получить 5 рандомных друзей по ссылке на страницу</h2>

<form method="post">
  <input type="text" name="userUrl" placeholder="Введите ссылку на вк">
  <button type="submit" name="submit">Отправить</button>
</form>

<?php

if(isset($_POST["submit"])) {
  $client = new \GuzzleHttp\Client(['verify' => false]);

  $screenName = basename($_POST['userUrl']);

  //запрос на получение user_id
  $userGet = "https://api.vk.com/method/users.get?user_ids=$screenName&access_token=$access_token&v=$version";

  $response = $client->request('GET', $userGet, [
    'headers' => [
      'accept' => 'application/json',
    ],
  ]);

  $arr = json_decode($response->getBody(), true);

  $userId = $arr["response"][0]["id"];

  $friendsGet = "https://api.vk.com/method/friends.get?user_id=$userId&order=random&fields=photo_max,city,sex,last_seen&count=5&access_token=$access_token&v=$version";

  $response = $client->request('GET', $friendsGet, [
    'headers' => [
      'accept' => 'application/json',
    ],
  ]);

  $arr = json_decode($response->getBody(), true);
  $entryPoint = $arr["response"]["items"];


?>
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
<?php
}
?>
</body>
</html>
