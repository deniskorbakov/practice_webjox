<?php

setcookie('name', 'Дима', time() + 3600);

$username = $_COOKIE['name'];

echo 'Welcome back, ' . $username . '!';

// setcookie('name', 'Дима', time() - 3600); - удалит куки


