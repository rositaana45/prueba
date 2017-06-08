

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
include_once('../entidad/Eacademico.php');

$vacan = new Eacademico();

$idCu = $_REQUEST['del_id'];

		if( $vacan->eliminar_academico($idCu) ){
				
				echo "Datos eliminados correctamente";
		}else{
		
		echo "Datos no eliminados";}  
  
      
?>