<?php

setcookie('user', $user['login'], time() - 1800, "/");

header('Location: ../../login.html');