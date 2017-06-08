<?php

include_once('conexion.php');
class Elaboral{
    
    private $db;

    public function insertar_laboral($lugarTrabajo,$tiempoTrabajo,$cargo,$motivoExtincionContrato,$idCurriculum){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call insertar_laboral('$lugarTrabajo','$tiempoTrabajo','$cargo','$motivoExtincionContrato','$idCurriculum')";
            
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