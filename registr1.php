<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    <link rel="stylesheet" href="style_cus.css">-->
    <title>Document</title>
</head>
<body>
<!doctype html>
<? session_start(); ?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div style="margin-bottom: 5px">
    <div class="verh">
        <div>
            <a href="" class="zalupa">Mail.ru</a>
            <a href="" class="zalupa">Почта</a>
            <a href="" class="zalupa">Мой Мир</a>
            <a href="" class="zalupa">Одноклассники</a>
            <a href="" class="zalupa">ВКонтакте</a>
            <a href="" class="zalupa">Игры</a>
            <a href="" class="zalupa">Знакомства</a>
        </div>
        <? if (!empty($_SESSION['name'])): ?>
            <div class="reg">
                <? echo $_SESSION['name']; ?>
                <a href="logout.php" class="vhod" style="text-decoration: none">Выйти</a>
            </div>
        <? else: ?>
            <div class="reg">
                <a href="registr.php" style="color: blue">Регистрация</a>
                <a href="auth.php" class="vhod" style="text-decoration: none">Войти</a>
            </div>
        <? endif; ?>
    </div>
</div>
<div>
    <div>
        <div class="verh pov">
            <div style="margin-left: 100px">
                <a href="index.php"><img src="Снимок.PNG"></a>
            </div>
        </div>
    </div>
</div>
<div>
<?php
$name = $_POST['name'];
$login = $_POST['login'];
$pass = $_POST['password'];
$db = mysqli_connect('localhost', 'root', '', 'cursachs');
if (!empty($login) and !empty($pass) and !empty($name)) {
    $db->query("insert into users(name, login, pass) values ('$name', '$login', '$pass')");
    unset($name, $login, $pass);
    require('index.php');
} else {
    echo 'Не полностью введены данные';
    require('registr.php');
}