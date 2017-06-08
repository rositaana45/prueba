
<?php
session_start();
$usuario=$_SESSION['usuario'];
$idIni=$_SESSION['idIni'];
$grupoId=$_SESSION['grupoId'];
$insertar=$_SESSION['insertar'];
$actualizar=$_SESSION['actualizar'];
$vistas=$_SESSION['vistas'];

include_once('../entidad/ElugarTrabajo.php');

$vacan = new ElugarTrabajo();

$idlugar = $_REQUEST['del_id'];


		if( $vacan->eliminar_LugarTrabajo($idlugar) ){
				
				echo "Datos eliminados correctamente";
		}else{
		
		echo "Datos no eliminados";}  
  
      
?>