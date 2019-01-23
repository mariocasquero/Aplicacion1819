<?php
    require_once "config/config.php";
    require_once "config/conexionDB.php";
    
    session_start();
    
    if(isset($_SESSION["usuario"]) && !isset($_SESSION["pagina"])){
        include_once $controladores["inicio"];
    }
    
    if(isset($_SESSION["pagina"])){
        include_once $controladores[$_SESSION["pagina"]];
    }
    else{
        include_once $controladores["login"];
    }
    
?>
