<?php

/**
 * Description of Usuario
 *
 * @author daw2
 */
require_once "UsuarioPDO.php";

class Usuario{
    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numAccesos;
    private $fechaHoraUltimaConexion;
    private $perfil;
    
    public function __construct($codUsuario, $password, $descUsuario, $numAccesos, $fechaHoraUltimaConexion, $perfil){
        $this->codUsuario=$codUsuario;
        $this->password=$password;
        $this->descUsuario=$descUsuario;
        $this->numAccesos=$numAccesos;
        $this->fechaHoraUltimaConexion=$fechaHoraUltimaConexion;
        $this->perfil=$perfil;
    }
    
    public static function validarUsuario($codUsuario, $password){
        $usuario=NULL;
            $aUsuarios= UsuarioPDO::validarUsuario($codUsuario, $password);
            
            if(!empty($aUsuarios)){
                $usuario=new Usuario($codUsuario, $password, $aUsuarios["descUsuario"], $aUsuarios["numAccesos"], $aUsuarios["fechaHoraUltimaConexion"], $aUsuarios["perfil"]);
            }
        return $usuario;
    }
    
    public static function altaUsuario($codUsuario, $password, $descUsuario){
        
        if($this::validarCodNoExiste($codUsuario)){
            $altaConExito=UsuarioPDO::altaUsuario($codUsuario, $password, $descUsuario);
        }
        
        if($altaConExito){
            $usuario=new Usuario($codUsuario, $password, $descUsuario, 0, 0, 'usuario');
        }
        return $usuario;
    }
    
    public static function validarCodNoExiste($codUsuario){
        return UsuarioPDO::validarCodNoExiste($codUsuario);
    }
}
