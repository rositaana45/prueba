
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
  $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();

$vacan = new Eacademico();


$descripcion = $_REQUEST['descripcion'];
$idCu = $_REQUEST['idCu'];


         if($insertar==1){
		if( $vacan->insertar_academico($descripcion,$idCu) ){

			$descripcion= "idCurriculum: ".$idCu."descripcion: ".$descripcion;

      $vacan2->insertar_sub_operacion($descripcion,'1');

         $db = new Conexion;
         $db->conectar();

                $query = "CALL mostrar_id_Suboperacion_ultimo()";
                $resultadoEmpresa = $db->consulta($query);

                  $db->desconectar();

     while ($fila=$db->fetch_array($resultadoEmpresa)){

          $idSub=$fila['IdSub'];
      
         }

      

      $vacan3->insertar_bitacora($idIni,$idSub);


				echo "Datos ingresados correctamente";
		}else{
		
		echo "Datos no ingresados correctamente";}  }else{echo 'Ud. no tiene los permisos necesarios para realizar esta operacion';}
  
      
?>