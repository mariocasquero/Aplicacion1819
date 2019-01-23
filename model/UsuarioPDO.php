<?php

/**
 * Description of UsuarioPDO
 *
 * @author daw2
 */
require_once "DBPDO.php";
class UsuarioPDO{
    public static function validarUsuario($codUsuario, $password){
        $aUsuario=[];
        $sql="select * from Usuarios where codUsuario=:cod and password=SHA2(:pass, 256)";
        
        $parametros=[":cod"=>$codUsuario, ":pass"=>$password];
        
        $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
        
        if($resultado->rowCount()==1){
            $registros=$resultado->fetchObject();
            $aUsuario=$registros->codUsuario;
            $aUsuario=$registros->password;
            $aUsuario=$registros->descUsuario;
            $aUsuario=$registros->numAccesos;
            $aUsuario=$registros->fechaHoraUltimaConexion;
            $aUsuario=$registros->perfil;
        }
        
        return $aUsuario;
    }
    
    public static function altaUsuario($codUsuario, $password, $descUsuario){
        $sql="insert into Usuarios values (:cod, :pass, :desc)";
        $parametros=[":cod"=>$codUsuario, ":pass"=>$password, ":desc"=>$descUsuario];
        
        $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
        
        if($resultado->rowCount()==1){
            return true;
        }
        else{
            return false;
        }
    }
    
    public static function validarCodNoExiste($codUsuario){
        $sql="select * from Usuarios where codUsuario=:cod";
        $parametros=[":cod"=>$codUsuario];
        
        $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
        
        if($resultado->rowCount()==0){
            return true;
        }
        else{
            return false;
        }
    }
}
