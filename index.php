<?php 
    session_start();
    
    require_once "Model/DbConfig.php";
    $db = new Database();
    $db->connect();

    if(isset($_GET['controller'])) {
        $controller = $_GET['controller'];
    }else{
        $controller = '';
    }

    switch($controller) {
        // case 'home': {
        //     require_once('Controller/home/index.php');
        //     break;
        // }

        default: {
            require_once('Controller/home/index.php');
            break;
        }
    }
?>