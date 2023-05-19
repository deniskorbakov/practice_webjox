<?php

session_start();

$_SESSION['name'] = 'миша';

$username = $_SESSION['name'];

echo 'Добро пожаловать - ' . $_SESSION['name'];

unset($_SESSION['name']);

session_destroy();