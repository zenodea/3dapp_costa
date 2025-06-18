<?php
    require_once 'config.php';
    require_once SRC_PATH . '/views/load.php';
    require_once SRC_PATH . '/models/model.php';
    require_once SRC_PATH . '/controllers/controller.php';

    $pageURI = $_SERVER['REQUEST_URI'];
    $pageURI = substr($pageURI,strrpos($pageURI, 'index.php')+10);
    if (!$pageURI)
    {
        new Controller('home');
    }
    else
        new Controller($pageURI);
?>