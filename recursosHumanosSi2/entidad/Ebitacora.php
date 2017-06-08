<?php

include_once('conexion.php');

class Ebitacora{
    
    private $db;

  
	
 public function insertar_bitacora($idsesion,$idSub){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call insertar_bitacora('$idsesion','$idSub')";
            
       $resultado= $db->consulta($query3);

	$db->desconectar();
	
           if($resultado){
            return true;
            
            }else {
            return false;
    
            }
	}
  
}

?>