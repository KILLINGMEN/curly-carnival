<!doctype html>
<?php session_start();
?>
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
        <?php if (!empty($_SESSION['name'])): ?>
            <div class="reg">
                <?php echo $_SESSION['name']; ?>
                <a href="logout.php" class="vhod" style="text-decoration: none">Выйти</a>
            </div>
        <?php else: ?>
            <div class="reg">
                <a href="registr.php" style="color: blue">Регистрация</a>
                <a href="auth.php" class="vhod" style="text-decoration: none">Войти</a>
            </div>
        <?php endif; ?>
    </div>
</div>
<div>
    <div>
        <div class="verh pov">
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
            <div class="dropdown" style="margin-right: 10px">
    <button onclick="myFunction()" class="dropbtn" style="border: none;">Отзывы</button>
    <div id="myDropdown" class="dropdown-content">
        <a href="dann.php?auto=Audi">Audi</a>
        <a href="BMW.php?auto=BMW">BMW</a>
        <a href="Chevrolet.php">Chevrolet</a>
        <a href="Citroen.php">Citroen</a>
        <a href="Ford.php">Ford</a>
    </div>
</div>
        </span>
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


<div>
    <div class="foto" style="margin-left: 250px">
        <h1 style="font-weight: 700;
    font-size: 35px;
    line-height: 36px;
    text-transform: none;
    display: inline;
    vertical-align: middle;
    margin: 0;
    padding: 0;
    outline: 0;
    border: 0;
">
            Модельный ряд <?php echo $_SESSION['mash']; ?>(<?php echo $_SESSION['mashrus']; ?>)
        </h1>
        <h2 style="color: #333;
    margin-bottom: 10px;
    margin-top: 10px;
    font-size: 20px;
    line-height: 24px;
    vertical-align: middle;
    width: 450px;
    font-weight: 300;
    font-family: Roboto Slab,Arial,serif;
">
            <?php echo $_SESSION['opisanie']; ?>
        </h2>
    </div>

</div>
<div style="padding: 20px">
    <div style="display: inline-block;
    vertical-align: top;
    margin-left: 20px;
    width: 640px">
        <h3 style="margin-bottom: 20px;
    position: relative;
    font-family: Roboto,Arial,sans-serif;
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;">
            Модели
        </h3>
        <div style="display: flex; flex-direction: row">
            <?php
            $c = 0;

            //               echo $_SESSION['neskolkon'];
            foreach ($_SESSION['neskolkon'] as $cells){
                foreach ($cells as $cell)
                {

                    echo '<a href="avtodop.php ?id=?'.$_SESSION['type_id'][$c].'" style="display: flex; flex-direction: column; margin: 20px;">
                        <div style="width: 180px; height: 112px">
                            <img src="'.$cell.'" style="width: 100%">
                        </div>
                        '.implode($_SESSION['neskolkom'][$c]).'</a>';

                    $c++;
                }
            }
            ?>
        </div>
    </div>
</div>
<?php
$gg=count($_SESSION['neskolkon']);
if ($gg>1) {
    $_SESSION['avtodn']=$_SESSION['neskolkon'][0];
    $_SESSION['davton']=$_SESSION['neskolkon'][1];
    $_SESSION['avtodm']=$_SESSION['neskolkom'][0];
    $_SESSION['davtom']=$_SESSION['neskolkom'][1];
}
else{
    $_SESSION['avtodn']=$_SESSION['neskolkon'][0];
    $_SESSION['avtodm']=$_SESSION['neskolkom'][0];
}
?>
</body>
</html>