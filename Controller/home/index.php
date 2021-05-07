<?php 
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }else{
        $action = '';
    }

    switch($action) {
        case 'list': {
            require_once('');
            break;
        }

        default: {
            require_once('View/home/home.php');
            break;
        }
    }
?>