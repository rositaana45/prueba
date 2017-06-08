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
include_once('../entidad/Ememorandum.php');
include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
include_once( '../src/NexmoMessage.php' );

    $requi = new Ememorandum();
     $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();

    $empleado = htmlspecialchars($_POST['empleado']);
    $fecha = htmlspecialchars($_POST['fecha']);
    $descripcion = htmlspecialchars($_POST['descripcion']);

    if( $requi->insertar($empleado,$fecha,$descripcion) ){

	

    	$descripcion= "Tabla: Memorandum  Empleado: ".$empleado." Fecha: ".$fecha." Descripcion: ".$descripcion;

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

  // Step 1: Declare new NexmoMessage.
  $nexmo_sms = new NexmoMessage('13571e07', '4909704d772253f0');

  // Step 2: Use sendText( $to, $from, $message ) method to send a message. 
  $info = $nexmo_sms->sendText( '+59176896801', 'RH-SYSTEM', ' ud. a recibido un memorandum  link  http://rrhh-si2.esy.es/control/pdfMemorandum.php                               . ' );
   

    echo 'datos ingresado correctamente';
  }else{
   echo 'datos no ingresado correctamente';
  }

?>