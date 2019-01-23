<?php
    $entradaOK=true;
    
    $aErrores=[
        "usuario"=>NULL,
        "descripcion"=>NULL,
        "password"=>NULL,
    ];

    if(isset($_REQUEST["aceptar"])){
        $aErrores["usuario"]=validacionFormularios::comprobarAlfabetico($_REQUEST["usuario"], 8, 1, 1);
        $aErrores["descripcion"]=validacionFormularios::comprobarAlfaNumerico($_REQUEST["descripcion"], 100, 3, 1);
        $aErrores["password"]=validacionFormularios::comprobarAlfaNumerico($_REQUEST["password"], 30, 1, 1);
        
        foreach($aErrores as $campo=>$error){ //Se recorre el array en busca de errores 
            if($error!=null){ //Si el valor de alguna posición del array de errores no es null, $entradaOK pasa a false y se limpia el campo
                $entradaOK=false;
                $_REQUEST[$campo]="";
            }
        }
    }
    
    if(isset($_REQUEST["aceptar"]) && $entradaOK){
        $codUsuario=$_REQUEST["usuario"];
        $descripcion=$_REQUEST["descripcion"];
        $password=$_REQUEST["password"];
        
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

