<?php
    if(isset($_REQUEST["salir"])){
        unset($_SESSION["usuario"]);
        session_destroy();
        header('Location: index.php');
    }
    
    if(!isset($_SESSION["usuario"])){
        header('Location: index.php');
    }
    else{
        require_once $vistas["layout"];
    }
?>

