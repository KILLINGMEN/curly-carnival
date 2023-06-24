<?php
session_start();
$login = $_POST['login'];
$pass = $_POST['password'];
$db = mysqli_connect('localhost', 'root', '', 'cursachs');
if (!empty($login) and !empty($pass)) {
    $log = $db->query("select `login` from `users` where '$login'=`login`")->fetch_assoc();
    $pas = $db->query("select `pass` from `users` where '$login'=`login`")->fetch_assoc();
    $name = $db->query("select `name` from `users` where '$login'=`login`")->fetch_assoc();
    if ($login == implode($log) and $pass == implode($pas)) {
        $_SESSION['login'] = implode($log);
        $_SESSION['pass'] = implode($pas);
        $_SESSION['name'] = implode($name);
        unset($login, $pass);
        require('index.php');
    } else {
        require 'auth1.php';
        echo 'Ошибка';
    }
} else {
    require 'auth1.php';
    echo 'Ошибка';
}