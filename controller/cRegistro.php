<?php
    $entradaOK=true;
    
    $aErrores=[
        "usuarioR"=>NULL,
        "descripcion"=>NULL,
        "passwordR"=>NULL,
    ];

    if(isset($_REQUEST["aceptar"])){
        $aErrores["usuarioR"]=validacionFormularios::comprobarAlfabetico($_REQUEST["usuarioR"], 8, 1, 1);
        $aErrores["descripcion"]=validacionFormularios::comprobarAlfaNumerico($_REQUEST["descripcion"], 100, 3, 1);
        $aErrores["passwordR"]=validacionFormularios::comprobarAlfaNumerico($_REQUEST["passwordR"], 30, 1, 1);
        
        foreach($aErrores as $campo=>$error){ //Se recorre el array en busca de errores 
            if($error!=null){ //Si el valor de alguna posición del array de errores no es null, $entradaOK pasa a false y se limpia el campo
                $entradaOK=false;
                $_REQUEST[$campo]="";
            }
        }
    }
    
    if(isset($_REQUEST["cancelar"])){
        $_SESSION["pagina"]="login";
        header("../index.php");
        require_once $vistas["layout"];
        exit;
    }
    
    if(isset($_REQUEST["aceptar"]) && $entradaOK){
        $codUsuario=$_REQUEST["usuarioR"];
        $descripcion=$_REQUEST["descripcion"];
        $password=$_REQUEST["passwordR"];
        
        $usuario=Usuario::altaUsuario($codUsuario, $password, $descUsuario);
        
        if(is_null($usuario)){
            $_SESSION["pagina"]="registro";
            require_once $vistas["layout"];
        }
        else{
            $_SESSION["usuario"]=$usuario;
            $_SESSION["pagina"]="inicio";
            header('Location: index.php');
            exit;
        }
    }
    else{
        $_SESSION["pagina"]="registro";
        require_once $vistas["layout"];
    }
    
?>

