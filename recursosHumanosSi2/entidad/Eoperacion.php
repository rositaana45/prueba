<?php

include_once('conexion.php');
class Eoperacion{
    
    private $db;

    public function insertar_operacion($descripcion){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call insertar_operacion('$descripcion')";
            
       $resultado= $db->consulta($query3);

	$db->desconectar();
	
           if($resultado){
            return true;
            
            }else {
            return false;
    
            }
	}

  public function actualizar_operacion($id,$descripcion){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call actualizar_operacion('$id','$descripcion')";
            
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