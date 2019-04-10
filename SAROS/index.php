<?php
session_start();

    include_once '_config/config.php';
    include_once '_config/Database.php';
    include_once '_functions/functions.php';
    require_once '_classes/Autoload.php';
    Autoload::register();

    if (isset($_GET['page']) && !empty($_GET['page'])){
    $page = trim(strtolower($_GET['page']));
    }else{
        $page = 'login';
    }

    $allpages = scandir('_controllers/');

    if (in_array($page.'_controller.php', $allpages)){

       // include_once 'models/'.$page.'_model.php';
        include_once '_controllers/'.$page.'_controller.php';
        include_once 'views/'.$page.'_view.php';

    }else{
    echo 'erreur 404';
    }

Database::disconnect();
?>