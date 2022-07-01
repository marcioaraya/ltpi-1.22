<?php
    # apaga os cookies
    setcookie("usuario", "", 0);
    setcookie("ts_login", "", 0);
    # redireciona para tela de login
    header('Location: login.php');
?>