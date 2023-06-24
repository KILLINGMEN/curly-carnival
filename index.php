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
                    <a href="dann.php?auto=Audi">Audi</a>
                    <a href="dann.php?auto=BMW">BMW</a>
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

</body>
</html>
</span>
</div>
</div>
<div class="foto">
    <img src="Снимок3.PNG" style="margin-top: 10px">
</div>
</body>
</html>