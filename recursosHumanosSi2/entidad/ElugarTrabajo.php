<?php

include_once('conexion.php');
class ElugarTrabajo{
    
    private $db;

    public function insertar_LugarTrabajo($idConv, $descrip){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call insertar_LugarTrabajo('$idConv', '$descrip')";
            
       $resultado= $db->consulta($query3);

	$db->desconectar();
	
           if($resultado){
            return true;
            
            }else {
            return false;
    
            }
	}

     public function eliminar_LugarTrabajo($idLugar){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call eliminar_LugarTrabajo('$idLugar')";
            
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