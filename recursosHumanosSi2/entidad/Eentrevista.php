
<?php

include_once('conexion.php');
class Eentrevista{
    
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
    
    
    
    
	
    
	
    public function insertar($fechahora,$estado,$seleccion,$idusuario){
        
        $db = new Conexion();
        $db->conectar();

        $query3 = "call insertarEntrevista('$fechahora','$estado','$seleccion','$idusuario')";
        $resul=$db->consulta($query3);
        $db->desconectar();
        
        if($resul){
            return true;
            
        }else {
            return false;
    
        }
    
}
         public function actualizar($id,$cargo,$fechahora,$salario,$tipo){
       
        $db = new Conexion();
        $db->conectar();     
        $query = "CALL actualizarConvocatoria('$id','$cargo','$fechahora','$salario','$tipo')";   
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