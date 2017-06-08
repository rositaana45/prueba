<?php

include_once('conexion.php');
class Ehorario{
    
    private $db;
    
	private $cantidad; 
    private $convocatoria;
    private $cargo; 
    
    public function __constructor(){
            $this->cantidad=0; 
            $this->convocatoria=0;
            $this->cargo='';
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
    
    
    
    
	
    public function insertar($horarioentrada,$horariosalida,$descripcion){
        
        $db = new Conexion();
        $db->conectar();
        
        
        $query3 = "call insertarHorario('$horarioentrada','$horariosalida','$descripcion')";
            
       $resultado= $db->consulta($query3);
 
        $db->desconectar();
        
        if($resultado){
            return true;
            
        }else {
            return false;
    
        }
    
}
         public function actualizar($id,$horaEntrada,$horaSalida,$descripcion){
    
        $db = new Conexion();
        $db->conectar();     
        $query = "CALL actualizarHorario('$id','$horaEntrada','$horaSalida','$descripcion')";   
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