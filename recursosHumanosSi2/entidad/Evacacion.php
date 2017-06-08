<?php

include_once('conexion.php');
class Evacacion{
    
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
    
    
    
    
	
    public function insertar($fechaInicial,$fechaFinal,$contrato){
        $db = new Conexion();
        $db->conectar();
        $query3 = "call insertarVacacion('$fechaInicial','$fechaFinal','$contrato')";
        $result=$db->consulta($query3);
        $db->desconectar();
        
        if($result){
            return true;
            
        }else {
            return false;
    
        }
}
}

?>