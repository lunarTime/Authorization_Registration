<?php
    $log = filter_var(trim($_POST['uname']),
    FILTER_SANITIZE_STRING);

    $pas = filter_var(trim($_POST['psw']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo "Недопустимая длина лsdfsdfsdогина";
        exit();
    }
?>
