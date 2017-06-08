
<?php

include_once('conexion.php');
class EsubOperacion{
    
    private $db;

	
 public function insertar_sub_operacion($descripcion,$idOpe){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call insertar_sub_operacion('$descripcion','$idOpe')";
            
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

