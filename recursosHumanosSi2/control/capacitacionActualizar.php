<?php
session_start();
$usuario=$_SESSION['usuario'];
$idIni=$_SESSION['idIni'];
$grupoId=$_SESSION['grupoId'];
$insertar=$_SESSION['insertar'];
$actualizar=$_SESSION['actualizar'];
$vistas=$_SESSION['vistas'];
?>
<?php
include_once('../entidad/Ecapacitacion.php');
include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');

	 $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();

     $requi = new Ecapacitacion();
    $id = htmlspecialchars($_POST['id']);
    $instructor = htmlspecialchars($_POST['instructor']);
    $descripcion = htmlspecialchars($_POST['descripcion']);
  
  

         if($actualizar==1){
        
    if( $requi->actualizar($id,$instructor,$descripcion)){
	
		$descripcion= "Tabla: capacidad/desarrollo  ID: ".$id." instructor: ".$instructor." descripcion: ".$descripcion;

      $vacan2->insertar_sub_operacion($descripcion,'3');

         $db = new Conexion;
         $db->conectar();

                $query = "CALL mostrar_id_Suboperacion_ultimo()";
                $resultadoEmpresa = $db->consulta($query);

                  $db->desconectar();

     while ($fila=$db->fetch_array($resultadoEmpresa)){

          $idSub=$fila['IdSub'];
      
         }
      $vacan3->insertar_bitacora($idIni,$idSub);
	  
    echo 'datos actualizado correctamente';
     }else{
   echo 'datos no ingresado correctamente';
  }        
  }else{
   echo "Ud. no tiene los privilegios necesarios para realizar esta operacion";
  }        
   
?>       