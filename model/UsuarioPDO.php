<?php

/**
 * Description of UsuarioPDO
 *
 * @author daw2
 */
require_once "DBPDO.php";
class UsuarioPDO{
    public static function validarUsuario($codUsuario, $password){
        $sql="select * from Usuarios where codUsuario=? and password=SHA(?, 256)";
        $aUsuario=[];
        
        $resultado=DBPDO::ejecutaConsulta($sql, [$codUsuario, $password]);
        
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
}
