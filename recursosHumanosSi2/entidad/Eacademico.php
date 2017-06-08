<?php

include_once('conexion.php');
class Eacademico{
    
    private $db;

    public function insertar_academico($descripcion, $idCurriculum){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call insertar_academico('$descripcion', '$idCurriculum')";
            
       $resultado= $db->consulta($query3);

	$db->desconectar();
	
           if($resultado){
            return true;
            
            }else {
            return false;
    
            }
	}
	
	 public function eliminar_academico($id){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call eliminar_academico('$id')";
            
       $resultado= $db->consulta($query3);

	$db->desconectar();
	
           if($resultado){
            return true;
            
            }else {
            return false;
    
            }
	}
	
	
 public function actualizar_academico($idAca,$descripcion,$idCu){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call actualizar_academico('$idAca','$descripcion','$idCu')";
            
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