<?php

include_once('conexion.php');
class Eturno{
    
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
    
    
    
    
	
    public function insertar($estado,$horario,$empleado){
        
        $db = new Conexion();
        $db->conectar();
        
        
        $query3 = "call insertarTurno('$estado','$horario','$empleado')";
            
        $resultado=$db->consulta($query3);

        $db->desconectar();
        
        if($resultado){
            return true;
            
        }else {
            return false;
    
        }
    
}
         public function actualizar($id,$estado,$horario,$empleado){
    
        $db = new Conexion();
        $db->conectar();     
        $query = "CALL actualizarTurno('$id','$estado','$horario','$empleado')";   
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