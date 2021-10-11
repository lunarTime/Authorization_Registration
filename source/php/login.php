<?php

$log = filter_var(trim($_POST['uname']),
FILTER_SANITIZE_STRING);

$pas = filter_var(trim($_POST['psw']),
FILTER_SANITIZE_STRING);

$mysqli = new mysqli('localhost', 'root', '', 'registration');
$result = $mysqli -> query("SELECT * FROM `users` WHERE `login` = '$log' AND `password` = '$pas'");

$user = $result -> fetch_assoc();

if(count($user) == 0) {
    echo "Нет такого пользователя";
    exit();
}

setcookie('user', $user['login'], time() + 1800, "/");

$mysqli -> close(); 

header('Location: /../main.php');

