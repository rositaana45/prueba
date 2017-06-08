<?php

include_once('conexion.php');
class Elogin{
    
    private $db;

    public function mostrarExisteUsuario($usuario,$password){
	
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call mostrarExisteUsuario('$usuario','$password')";
            
       $resultado= $db->consulta($query3);

	$db->desconectar();
	
          return $resultado; 
}

 public function iniciarSision($usuario){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call iniciarSesion('$usuario')";
            
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