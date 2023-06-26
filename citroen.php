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
            <div>
                <a href="index.php"><img src="Снимок.PNG"></a>
            </div>
            <span>
                <span>
                    <a href="" class="nst">Новости</a>
                </span>
                <span>
                    <a href="" class="nst">Статьи</a>
                </span>
                <span>
                    <a href="" class="nst">Тест-драйвы</a>
                </span>
            </span>
            <input type="text" placeholder="Поиск по сайту" class="reg nov">
        </div>
    </div>
</div>
