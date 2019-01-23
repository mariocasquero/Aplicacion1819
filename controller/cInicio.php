<?php
    if(isset($_REQUEST["salir"])){
        unset($_SESSION["usuario"]);
        session_destroy();
        header('Location: index.php');
        exit;
    }
    
    if(!isset($_SESSION["usuario"])){
        header('Location: index.php');
        exit;
    }
    else{
        require_once $vistas["layout"];
    }
?>

