<?php

include_once('conexion.php');
class Evacante{
    
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
    
    
    
    
	
    public function insertar($cargo,$convocatoria,$cantidad){
        
        $db = new Conexion();
        $db->conectar();
        
        
        $query3 = "call insertarVacante('$cargo','$convocatoria','$cantidad')";
            
       $resultado= $db->consulta($query3);

        $db->desconectar();
        
        if($resultado){
            return true;
            
        }else {
            return false;
    
        }
    
}
         public function actualizar($nCargo,$Convocatoria,$idCargo,$idConvocatoria,$cantidad){
        
        $db = new Conexion();
        $db->conectar();
        $con= "CALL mostrarIdCargo('$nCargo')"; 
        $nuevoCargo = $db->consulta($con);    
          while ($fila=$db->fetch_array($nuevoCargo)){
            $row=$fila['idCargo'];
         }
        $db->desconectar(); 
             
        $db = new Conexion();
        $db->conectar();     
        $query = "CALL actualizarVacante('$row','$Convocatoria','$idCargo','$idConvocatoria','$cantidad')";   
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