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
        <div class="verh pov" style="margin-top: 10px">
            <div style="margin-left: 100px">
                <a href="index.php"><img src="Снимок.PNG"></a>
            </div>
            <span>
                <span>
                    <a href="" class="nst">Новости</a>
                </span>
                <span>
                    <a href="" class="nst">Статьи</a>
                </span>
                <span style="margin-right: 670px">
                    <a href="" class="nst">Тест-драйвы</a>
                </span>
            </span>
            <form action="dann.php" method="post">
                <input type="text" name="poisk" placeholder="Поиск по сайту" class="reg nov">
                <input type="submit">
            </form>
        </div>
    </div>
</div>
<div>
    <div class="seriyglav">
        <span class="negr">
            <span style="margin-left: 100px">
                <a href="" class="seriy">Оплатить штраф</a>
            </span>
            <span>
                <a href="" class="seriy">Таблица штрафов</a>
            </span>
            <span style="margin-right: 10px">
                <a href="" class="seriy">ПДД</a>
            </span>
            <div class="dropdown" style="margin-right: 10px">
                <button onclick="myFunction()" class="dropbtn" style="border: none;">Каталог</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="catalog.php">Audi</a>
                    <a href="BMW.php">BMW</a>
                    <a href="Chevrolet.php">Chevrolet</a>
                    <a href="Citroen.php">Citroen</a>
                    <a href="Ford.php">Ford</a>
                </div>
            </div>

            <script>
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            window.onclick = function (event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
            </script>

</body>
</html>
<div class="dropdown" style="margin-right: 10px">
    <button onclick="myFunction()" class="dropbtn" style="border: none;">Отзывы</button>
    <div id="myDropdown" class="dropdown-content">
        <a href="catalog.php">Audi</a>
        <a href="BMW.php">BMW</a>
        <a href="Chevrolet.php">Chevrolet</a>
        <a href="Citroen.php">Citroen</a>
        <a href="Ford.php">Ford</a>
    </div>
</div>

<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
<div style="text-decoration: none;
        background-color: #ff4f00;
        padding: 4px;
margin-top: 10px"
<a href=""></a>
</div>
<div style="margin-top: 15px ">
    <a href="" class="podorange" style="margin-left: 90px">Тест-драйвы</a>
    <a href="" class="podorange">Отзывы</a>
    <a href="" class="podorange">Новости</a>
    <a href="" class="podorange">Обсудить</a>
    <a href="" class="podorange">Расчет страховки</a>
</div>
<div style="text-decoration: none;
        background-color: #dedede;
        padding: 0.5px;
margin-top: 10px">
</div>
<div style="display: flex">
    <div class="form" style="border: 7px solid #ff4f00;
    padding: 10px;
border-radius: 0px;
width: 300px;
margin-left: 60px;
margin-top: 20px;
display: flex;
flex-direction: column;
">
        <img src="bmwsedan.PNG">

        <p href="" style="text-decoration: none;
    font-family: Arial;
    font-size: 17px;
    color: black;
    margin-right: 0px;
    height: 10px;
text-align: center">
            BMW M5
        </p>
        <div style="text-decoration: none;
        background-color: #dedede;
        padding: 0.5px;
        margin-top: 10px">
        </div>
        <p href="" style="text-decoration: none;
    font-family: Arial;
    font-size: 17px;
    color: black;
    margin-right: 0px;
    height: 10px;">
            <strong>Тип двигателя</strong>
        </p>
        <p href="" style="text-decoration: none;
    font-family: Arial;
    font-size: 17px;
    color: black;
    margin-right: 0px;
    height: 10px;">
            <input type="checkbox">Бензин
        </p>

        <p href="" style="text-decoration: none;
    font-family: Arial;
    font-size: 17px;
    color: black;
    margin-right: 0px;
    height: 10px;">
            <input type="checkbox">Дизель
        </p>
        <div style="text-decoration: none;
        background-color: #dedede;
        padding: 0.5px;
        margin-top: 10px">
        </div>
        <a href="avtodop.php" class="podorange" style="text-align: center;
    margin-top: 25px">Сбросить все фильтры</a>
    </div>
    <div>
        <p href="" style="text-decoration: none;
    font-family: Arial;
    font-size: 28px;
    color: black;
    margin-left: 40px;
    height: 10px;">
            <strong>Модификации и комплектации</strong>
        </p>
        <hr style="margin-top: 40px;
        margin-left: 35px;
        margin-bottom: 25px">
        <div style="display:flex;
        flex-direction: row">
            <a href="" style="text-decoration: none;
            font-family: Arial;
            font-size: 25px;
            color: blue;
            margin-left: 40px;
            height: 10px;
            text-align: center;
            color: #005bd1;
            font-weight: bold;
            text-align: left">
                2.5 MT
            </a>
            <p href="" style="text-decoration: none;
            font-family: Arial;
            font-size: 25px;
            color: black;
            margin-left: 200px;
            height: 10px;
            text-align: right;
margin-top: 0px">
                399 Л.С.
            </p>
        </div>
        <div>
            <p href="" style="text-decoration: none;
            font-family: Arial;
            font-size: 17px;
            color: black;
            margin-left: 40px;
            height: 10px;
            margin-top: 0px">
                Автомат, передний привод, бензин, 5.7 с до 100 км/ч
            </p>
        </div>
        <hr style="margin-top: 40px;
        margin-left: 35px;
        margin-bottom: 25px">
        <div style="display:flex;
        flex-direction: row">
            <a href="" style="text-decoration: none;
            font-family: Arial;
            font-size: 25px;
            color: blue;
            margin-left: 40px;
            height: 10px;
            text-align: center;
            color: #005bd1;
            font-weight: bold;
            text-align: left">
                2.8 MT
            </a>
            <p href="" style="text-decoration: none;
            font-family: Arial;
            font-size: 25px;
            color: black;
            margin-left: 200px;
            height: 10px;
            text-align: right;
margin-top: 0px">
                430 Л.С.
            </p>
        </div>
        <div>
            <p href="" style="text-decoration: none;
            font-family: Arial;
            font-size: 17px;
            color: black;
            margin-left: 40px;
            height: 10px;
            margin-top: 0px">
                Автомат, передний привод, бензин, 5.3 с до 100 км/ч
            </p>
        </div>
    </div>
</div>
</body>
</html>

