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
include_once('../entidad/Eturno.php');
include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
  $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();
    $requi = new Eturno();
    $estado = htmlspecialchars($_POST['estado']);
    $empleado = htmlspecialchars($_POST['empleado']);
    $horario = htmlspecialchars($_POST['horario']);


    if( $requi->insertar($estado,$horario,$empleado)){

    	$descripcion= "Tabla: Turno  Estado: ".$estado."empleado: ".$empleado." Horario: ".$horario;

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
  }

?>