<?php

include_once('conexion.php');
class Erequisitos{
    
    private $db;
    private $convocatoria;
    private $descripcion;
    
    public function __constructor(){
            
            $this->convocatoria=0;
            $this->descripcion='';
    }
    
    
    public function setcantidad($cantidad){
        $this->cantidad=$cantidad;
    }
    
    public function setconvocatoria($convocatoria){
        $this->convocatoria=$convocatoria;
    }
    
      public function setcargo($cargo){
        $this->cargo=$cargo;
    }
    
    
    
    
    
    public function getcantidad(){
        return $this->cantidad;
    }

    public function getconvocatoria(){
       return $this->convocatoria;
    }
    
    public function getcargo(){
        return $this->cargo;
    }
    
    
    
    
	
    public function insertar($convocatoria,$descripcion){
        
        $db = new Conexion();
        $db->conectar();
             
        $query = "call insertarRequisitos('$convocatoria','$descripcion')";   
        $resul = $db->consulta($query);
        $db->desconectar();
        
        if($resul){
            return true;
            
        }else {
            return false;
    
        }
    
}
    
     public function actualizar($idRequisito,$convocatoria,$descripcion){
        
        $db = new Conexion();
        $db->conectar();
             
        $query = "call actualizarRequisito('$idRequisito','$convocatoria','$descripcion')";   
        $resul = $db->consulta($query);
        $db->desconectar();
        
        if($resul){
            return true;
            
        }else {
            return false;
    
        }
    
}
    
}



?>