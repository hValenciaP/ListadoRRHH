<?php 
require "conexion.php";
class mdlPersonal{

        //private $usuarios;
    
    function __construct(){
        //inicializar variable array que tendra los resultados
        //atributos variables constantes
        $this->usuarios=array();
    }

    static public function mdlMostrarListadoProduccion(){

        /*$stmt= Conexion::conectar()->prepare("select top 1 IDUSUARIO from usuario");
        $stmt ->execute();
        $stmt->fetchAll();
        return $stmt; */

        //$consulta = "SELECT IDCODIGOGENERAL, IDCARGO FROM PERSONAL";
        $consulta = "SELECT * FROM SAS_LISTADO_PERSONAL_PRO where numero = 1 ORDER BY  APENOM";
        $resultado=Conexion::conectar()->query($consulta);
        //lleno el array con cada dato del resultado
        
            return $resultado;
    }
}