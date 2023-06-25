<?php
session_start();

// селектор для логики с id, при его активации включается другая логика запросов
$is_id_req = false;

if ( isset($_GET['auto']) ) $x = $_GET['auto'];
elseif ( isset($_GET['id']) ) { $x = $_GET['id']; $is_id_req = true;}
else $x = $_POST['poisk'];

// теперь если в $_GET был id , в $x будет это id и $is_id_req будет в `true`

if (empty($x)) {
    require 'index.php';
} else {
    $db = mysqli_connect('localhost', 'root', '', 'cursachs');
    
    // проверка, есть ли в базе id
    if ($is_id_req == true) $auto = $db->query("select `marka` from `types` where `type_id`='$x'")->fetch_assoc();
    else $auto = $db->query("select `marka` from `auto` where `marka`='$x' or `markarus`='$x'")->fetch_assoc();
    
    if (empty($auto)) {
        require 'index.php';
    } else {
        // фиговое место, очень дублируется код, нужно переписать, очень некрасиво и сложно будет обслуживать
        if ($is_id_req != true)
            // старый обработчик запросов
        {
             $y = $db->query("select `markarus` from `auto` where `marka`='$x' or `markarus`='$x'")->fetch_assoc();
             $z = implode($db->query("select `auto_id` from `auto` where `marka`='$x' or `markarus`='$x'")->fetch_assoc());
             $m = $db->query("select `type` from `types` where `marka`='$z'")->fetch_all(1);
             $n = $db->query("select `image` from `types` where `marka`='$z'")->fetch_all(1);
             $hu = $db->query("select `auto_desk` from `auto` where `marka`='$x' or `markarus`='$x'")->fetch_assoc();
             $g = $db->query("select `type` from `types` where `marka`='$z'")->fetch_all(1);
        }
        // тут с id запосы делаем новые , я не буду писать, т.к. не могу проверить, тебе надо добавить
        else 
        {
             $m = $db->query("select `type` from `types` where `marka`='$z'")->fetch_all(1);
        }
        $_SESSION['mash'] = implode($auto);
        $_SESSION['mashrus'] = implode($y);
        $_SESSION['neskolkom'] = $m;
        $_SESSION['neskolkon'] = $n;
        $_SESSION['opisanie'] = implode($hu);
        $_SESSION['type'] = $g;
        
    }
    echo "<pre>";
    var_dump($_SESSION['neskolkon'][0]);
}
header('Location: catalog.php');
