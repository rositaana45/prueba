<?php

include_once('conexion.php');
class Ecurriculum{
    
    private $db;

    public function insertar_curriculum($bachillerHumanidades, $domicilio, $email, $idiomaExtranjero, $idiomaNativo, $lugarNacimiento, $nacionalidad){
        
       $db = new Conexion();
        $db->conectar();
        
        $query3 = "call insertar_curriculum('$bachillerHumanidades', '$domicilio', '$email', '$idiomaExtranjero', '$idiomaNativo', '$lugarNacimiento','$nacionalidad')";
            
       $resultado= $db->consulta($query3);

	$db->desconectar();
	
           if($resultado){
            return true;
            
            }else {
            return false;
    
            }
	}

   public function insertar_Postulante($ci, $fechaNacimiento, $nombre, $sexo, $telefono,$idCurriculum){
        
        $db = new Conexion();
        $db->conectar();
        
        $query3 = "call insertar_postulante('$ci', '$fechaNacimiento', '$nombre', '$sexo', '$telefono','$idCurriculum')";
            
           $resultado=$db->consulta($query3);

        $db->desconectar();
        
          if($resultado){
            return true;
            
        }else {
            return false;
    
        }
}

public function insertar_Laboral($lugarTrabajo, $tiempoTrabajo, $cargo, $motivoExtincionContrato,$idCurriculum){
        
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

public function insertar_Academico( $descripcion,$idCurriculum){
        
        $db = new Conexion();
        $db->conectar();
        
        $query3 = "call insertar_academico('$descripcion','$idCurriculum')";
            
          $resultado=$db->consulta($query3);

        $db->desconectar();
        
          if($resultado){
            return true;
            
        }else {
            return false;
    
        }
}

public function eliminar_Curriculum( $idCurriculum){
        
        $db = new Conexion();
        $db->conectar();
        
        $query3 = "call eliminarCurriculum('$idCurriculum')";
            
          $resultado=$db->consulta($query3);

        $db->desconectar();
        
          if($resultado){
            return true;
            
        }else {
            return false;
    
        }
}
}

?>