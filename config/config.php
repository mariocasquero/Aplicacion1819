<?php
    require_once "core/181025validacionFormularios.php";
    require "model/Usuario.php";
    
    $controladores=[
        "login"=>"controller/cLogin.php",
        "inicio"=>"controller/cInicio.php",
        "registro"=>"controller/cRegistro.php"
    ];
    
    $vistas=[
        "layout"=>"view/layout.php",
        "login"=>"view/vLogin.php",
        "inicio"=>"view/vInicio.php",
        "registro"=>"view/vRegistro.php"
    ];
?>