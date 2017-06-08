<?php

include_once('conexion.php');
class Egrupo{
    
    private $db;

    public function insertar_grupo($categoria){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call insertar_grupo('$categoria')";
            
       $resultado= $db->consulta($query3);

	$db->desconectar();
	
           if($resultado){
            return true;
            
            }else {
            return false;
    
            }
	}

  public function actualizar_grupo($idGrupo,$categoria){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call actualizar_grupo('$idGrupo','$categoria')";
            
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