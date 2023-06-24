<?php
session_start();

if ( isset($_GET['auto']) ) $x = $_GET['auto'];
elseif ( isset($_GET['type']) ) $x = $_GET['type'];
else $x = $_POST['poisk'];



if (empty($x)) {
    require 'index.php';
} else {
    $db = mysqli_connect('localhost', 'root', '', 'cursachs');
    $auto = $db->query("select `marka` from `auto` where `marka`='$x' or `markarus`='$x'")->fetch_assoc();
    if (empty($auto)) {
        require 'index.php';
    } else {
        $y = $db->query("select `markarus` from `auto` where `marka`='$x' or `markarus`='$x'")->fetch_assoc();
        $z = implode($db->query("select `auto_id` from `auto` where `marka`='$x' or `markarus`='$x'")->fetch_assoc());
        $m = $db->query("select `type` from `types` where `marka`='$z'")->fetch_all(1);
        $n = $db->query("select `image` from `types` where `marka`='$z'")->fetch_all(1);
        $hu = $db->query("select `auto_desk` from `auto` where `marka`='$x' or `markarus`='$x'")->fetch_assoc();
        $g = $db->query("select `type` from `types` where `marka`='$z'")->fetch_all(1);
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