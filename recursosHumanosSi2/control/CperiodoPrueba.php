<?php
session_start();
$usuario=$_SESSION['usuario'];
$idIni=$_SESSION['idIni'];
$grupoId=$_SESSION['grupoId'];
$vistas=$_SESSION['vistas'];
?>
<?php
include_once('../entidad/EperiodoPrueba.php');
include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
  $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();

    $requi = new EperiodoPrueba();
    $fechaInicio = htmlspecialchars($_POST['fechaInicio']);
    $fechaFinal = htmlspecialchars($_POST['fechaFinal']);
    $entrevista = htmlspecialchars($_POST['entrevista']);
    $contrato = htmlspecialchars($_POST['contrato']);

    

         if($insertar==1){


    if( $requi->insertar($fechaInicio,$fechaFinal,$entrevista,$contrato)){

    	$descripcion= "Tabla: periodoPrueba  Fecha Inicial: ".$fechaInicio." fecha Final: ".$fechaFinal."entrevista: ".$entrevista."contrato: ".$contrato;

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