<?php
    $log = filter_var(trim($_POST['uname']),
    FILTER_SANITIZE_STRING);

    $pas = filter_var(trim($_POST['psw']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($log) < 5 || mb_strlen($log) > 90) {
        echo "Недопустимая длина логина";
        exit();
    }
