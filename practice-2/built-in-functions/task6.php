<?php

$email = 'wm-school@example.com';

$user = strstr($email, '@', true);
echo $user; // выводит name

