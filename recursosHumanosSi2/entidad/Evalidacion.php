<?php

include_once('conexion.php');
class Evalidacion{
    
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
    
    
    
    
	
    public function insertar($convocatoria,$id,$estado){
        
        $db = new Conexion();
        $db->conectar();
             
        $query = "call insertarValidacion('$convocatoria','$id','$estado')";   
       $resul = $db->consulta($query);
        $db->desconectar();
        
        if($resul){
            return true;
            
        }else {
            return false;
    
        }
    
}
    public function actualizar($idPostulante,$idConvocatoria,$postulante,$convocatoria,$estado){
       
        $db = new Conexion();
        $db->conectar();
        $query = "CALL mostrarIdPostulante('$postulante')";
        $resul2 = $db->consulta($query);
        while($fila=$db->fetch_array($resul2)){
            $row=$fila['idPostulante'];
        }
        $db->desconectar();
        $db = new Conexion();
        $db->conectar();      
        $query = "call actualizarValidacion('$idConvocatoria','$idPostulante','$convocatoria','$row','$estado')";   
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