<?php

include_once('conexion.php');
class Eprivilegio{
    
    private $db;

    public function insertar_privilegio($idoperacion,$idgrupo){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call insertar_privilegio('$idoperacion','$idgrupo')";
            
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