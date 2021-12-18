<?php

$login = filter_var(trim($_POST["login"]),
    FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', '', 'bd');

$result = $mysql->query("SELECT * FROM `bdsm` WHERE `login` ='$login' AND  `password` ='$pass'");
$users = $result->fetch_assoc();

if (!$users) {
    echo 'Неверный логин или пароль';
    exit();
}
setcookie('users', $users['login'], time() + 3600, "/");
    $mysql->close();
    header('Location: ../index.php')

    ?>