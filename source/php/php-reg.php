<?php

$log = filter_var(trim($_POST['uname']),
FILTER_SANITIZE_STRING);

$pas = filter_var(trim($_POST['psw']),
FILTER_SANITIZE_STRING);

$mysqli = new mysqli('localhost', 'root', '', 'registration');

$mysqli -> query("INSERT INTO  `users` (`login`, `password`) 
VALUES('$log', '$pas')");

$mysqli -> close(); 

header('Location: /../login.html');
