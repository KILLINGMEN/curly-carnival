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
    <form action="registr1.php" method="post" class="box">
        <div class="form" style="border: 1px solid #3a3a3a;
    padding: 10px;
border-radius: 10px;
width: 400px;
margin-left: 450px;
margin-top: 5px">
            <div style="font-family: Arial;
    font-size: 25px;">
                <?echo "Создание почтового ящика"?>
            </div>
            <div style="margin-bottom: 20px">
                <input type="text" name="name" style="height: 30px; width: 400px" placeholder="Введите имя" class="inp">
            </div>
            <div style="margin-bottom: 20px">
                <input type="text" name="login" style="height: 30px; width: 400px" placeholder="Введите логин" class="inp">
            </div>
            <div style="margin-bottom: 20px">
                <input type="password" name="password" style="height: 30px; width: 400px" placeholder="Введите пароль" class="inp">
            </div>

            <button class="inp" style="background-color: #005efa;
            border-radius: 3px;
            border: none;
            color: #f1f1f1;
            width: 400px;
            font-family: Arial;
    font-size: 15px;
    height: 40px;
">
                Создать</button>
        </div>
    </form>
</div>
</body>
</html>

