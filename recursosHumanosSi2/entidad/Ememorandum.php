<?php
include_once("conexion.php");
class Ememorandum{
	private $db;
	private $idCategoria;
	private $categoria;
    private $habilitado;
    
    public function __construct(){
		$this->db = new Conexion();
		$this->idCategoria=0;
        
        $this->habilitado = 0;
		$this->db->conectar();
    }
	

	
	public function insertar($empleado,$fecha,$descripcion){
        $db = new Conexion();
        $db->conectar();
             
        $query = "call insertarMemorandum('$fecha','$descripcion','$empleado')";   
        $resul = $db->consulta($query);
        $db->desconectar();
        
        if($resul){
            return true;
            
        }else {
            return false;
    
        }
	}
	
    public function actualizar($id,$fecha,$motivo,$empleado){
         $db = new Conexion();
         $db->conectar();
             
        $query = "call actualizarMemorandum('$id','$fecha','$motivo','$empleado')";   
        $resul = $db->consulta($query);
        $db->desconectar();
        
        if($resul){
            return true;
            
        }else {
            return false;
    
        }
        
    }
	
}
/*$ca = new CategoriaC();
$cate = 'Categoria A';
echo $ca->existe($cate);*/
?>