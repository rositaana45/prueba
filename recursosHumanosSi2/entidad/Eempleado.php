<?php

include_once('conexion.php');
class Eempleado{
    
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
    
    
    
    
	
    public function insertar($contrato,$empleado,$asigna,$habilitado)
    { 
        $db = new Conexion();
        $db->conectar();
        
        
        $query3 = "call insertarEmpleado('$contrato','$empleado','$asigna','$habilitado')";
            
       $resultado= $db->consulta($query3);
 
        $db->desconectar();
        
        if($resultado){
            return true;
            
        }else {
            return false;
    
        }
    
}
    public function actualizar($id,$contrato,$postulante,$asigna,$habilitado){
         $db = new Conexion();
        $db->conectar();
        $query3 = "call actualizarEmpleado('$id','$contrato','$postulante','$asigna','$habilitado')";   
        $db->consulta($query3);
        $db->desconectar();
        
        if($query3){
            return true;
            
        }else {
            return false;
    
        }
        
        
        
    }
    
  
}



?>