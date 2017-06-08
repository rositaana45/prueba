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

        
        
   /*     $query = "call mostrarIdCargo('$this->cargo')";
       
        $query2= $db->consulta($query);
        
         while ($fila=$db->fetch_array($query2)){
             $id = $fila['idCargo'];
         }
        
        */
        
        
        $query3 = "call insertarVacante('$cargo','$convocatoria','$cantidad')";
            
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