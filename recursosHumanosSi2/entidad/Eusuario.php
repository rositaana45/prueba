<?php

include_once('conexion.php');
class Eusuario{
    
    private $db;

    public function insertar_usuario($nombre,$password,$correo,$estado,$idempleado,$idgrupo){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call insertar_usuario('$nombre','$password','$correo','$estado','$idempleado','$idgrupo')";
            
       $resultado= $db->consulta($query3);

	$db->desconectar();
	
           if($resultado){
            return true;
            
            }else {
            return false;
    
            }
	}

  public function actualizar_usuario($nombre,$password,$correo,$estado,$idempleado,$idgrupo){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call actualizar_usuario('$nombre','$password','$correo','$estado','$idempleado','$idgrupo')";
            
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