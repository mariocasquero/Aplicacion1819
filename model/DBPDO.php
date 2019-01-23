<?php
/**
 * Description of DBPDO
 *
 * @author daw2
 */
class DBPDO{
    public static function ejecutaConsulta($sql, $parametros){
        try{
            $miDataBase=new PDO(DSN, USUARIO, PASSWORD);
            $miDataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $consulta=$miDataBase->prepare($sql);
            $consulta->execute($parametros);
        }catch(PDOException $pdoe){
            $resultadoConsulta=NULL;
            echo "Código de eror: ".$pdoe->getCode();
            echo "Línea de error: ".$pdoe->getLine();
            unset($miDataBase);
        }
        return $consulta;
    }    
}
