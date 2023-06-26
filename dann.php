<?php
session_start();
session_reset();

// селектор для логики с id, при его активации включается другая логика запросов
$is_id_req = false;

if ( isset($_GET['auto']) ) $x = $_GET['auto'];
elseif ( isset($_GET['id']) ) { $x = $_GET['id']; $is_id_req = true;}
else $x = $_POST['poisk'];

// теперь если в $_GET был id , в $x будет это id и $is_id_req будет в `true`
//

if (empty($x)) {
    require 'index.php';
} else {
    $db = mysqli_connect('localhost', 'root', 'rootpassmysql', 'cursachs');

    // проверка, есть ли в базе id

    if ($is_id_req == true) {
	    $type   = $db->query("select * from `types` where `type_id`='$x'")->fetch_assoc();

	    $vendor = $db->query("select * from `auto` where `auto_id`='".$type['marka']."'")->fetch_assoc();

    } else {
	    $vendor = $db->query("select * from `auto` where `marka`='$x' or `markarus`='$x'")->fetch_assoc();
    }

    if (empty($vendor)) {
        require 'index.php';
    } else {
        if ($is_id_req != true)
            // старый обработчик запросов
	{
		$marka = $vendor['auto_id'];

		$types = $db->query("select * from `types` where `marka`='$marka'")->fetch_all();


		$_SESSION['car_types'] = $types;

                $_SESSION['mash'] = $vendor['marka'];
        	$_SESSION['mashrus'] = $vendor['markarus'];

	        $_SESSION['opisanie'] = $vendor['auto_desc'];

                header('Location: catalog.php');
        }
        // тут с id запосы делаем новые , я не буду писать, т.к. не могу проверить, тебе надо добавить
        else 
	{
		$sub_type = $db->query("select * from `podtip` where `type`='".$type['type_id']."'")->fetch_all();
		$_SESSION['modifications'] = $sub_type;
                header('Location: avtodop.php');
	}

/*
	$_SESSION['car_types'] = $types;

        $_SESSION['mash'] = $vendor['marka'];
	$_SESSION['mashrus'] = $vendor['markarus'];

//        $_SESSION['neskolkon'] = $n;
	$_SESSION['opisanie'] = $vendor['auto_desc'];

/*
        $_SESSION['mash'] = implode($auto);
        $_SESSION['mashrus'] = implode($y);
        $_SESSION['neskolkom'] = $m;
        $_SESSION['neskolkon'] = $n;
	$_SESSION['opisanie'] = implode($hu);
*/
//        $_SESSION['type'] = $g;
        
    }
//    echo "<pre>";
//    var_dump($_SESSION['neskolkon'][0]);
}
//header('Location: catalog.php');
