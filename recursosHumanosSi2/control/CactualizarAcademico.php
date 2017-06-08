

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
include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
$vacan = new Eacademico();
$vacan2 = new EsubOperacion();
$vacan3 = new Ebitacora();

$descripcion = $_REQUEST['descripcion'];
$idCu = $_REQUEST['idCu'];
$idAca = $_REQUEST['idaca'];

				 if($actualizar==1){

		if( $vacan->actualizar_academico($idAca,$descripcion,$idCu) ){

$descripcion= "idAcademico: ".$idAca."  descripcion: ".$descripcion."  idCurriculum: ".$idCu;

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
				
				echo "Datos actualizados correctamente";
		}else{
		
		echo "Datos no actualizados";}  }else{echo "Ud. no tiene los privilegios necesarios para realizar esta operacion";}
  
      
?>