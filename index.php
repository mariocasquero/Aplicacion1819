<?php
    require_once "config/config.php";
    require_once "config/conexionDB.php";
    
    session_start();
    
    if(isset($_SESSION["usuario"]) && !isset($_SESSION["pagina"])){
        $controlador=$controladores["inicio"];
        include_once $controlador;
    }
    
    if(isset($_SESSION["pagina"])){
        $controlador=$controladores[$_SESSION["pagina"]];
        include_once $controlador;
    }
    else{
        $controlador=$controladores["login"];
        include_once $controlador;
    }
    
?>
