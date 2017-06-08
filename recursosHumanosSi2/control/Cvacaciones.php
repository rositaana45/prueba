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
include_once('../entidad/Evacacion.php');
include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
  $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();

    $requi = new Evacacion();
    $fechaInicial = htmlspecialchars($_POST['fechaInicial']);
    $fechaFinal = htmlspecialchars($_POST['fechaFinal']);
    $contrato = htmlspecialchars($_POST['contrato']);


     

         if($insertar==1){


    if( $requi->insertar($fechaInicial,$fechaFinal,$contrato)){

    	$descripcion= "Tabla: vacacion   Fecha de inicio: ".$fechaInicial." fecha final: ".$fechaFinal."numero de contrato: ".$contrato;

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
    	
    echo 'datos ingresado correctamente';
  }else{
   echo 'datos no ingresado correctamente';
  }}else{echo 'Ud. no tiene los permisos necesarios para realizar esta operacion';}

?>