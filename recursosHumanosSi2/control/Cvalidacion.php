
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
include_once('../entidad/Evalidacion.php');
include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
include_once( '../src/NexmoMessage.php' );
  $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();

 $db = new Conexion();
 $db->conectar();
 $requi = new Evalidacion();

$convocatoria = htmlspecialchars($_POST['convocatoria']);
$postulante = htmlspecialchars($_POST['postulante']);
$estado = htmlspecialchars($_POST['estado']);


if($estado == '1'){
    $estado = 'A';
}else{
    $estado = 'R';
}



 $query = "call mostrarIdPostulante('$postulante')";
       
        $query2= $db->consulta($query);
        
         while ($fila=$db->fetch_array($query2)){
             $id = $fila['idPostulante'];
             $emailPostu=$fila['email'];
         }

  $db->desconectar();

  $db = new Conexion;
        $db->conectar();
                $query = "CALL mostrar_id_ultimo_seleccion()";
                $fila8 = $db->consulta($query); 
                $row8=$db->fetch_array($fila8);
                $db->desconectar();
                $idselec=$row8['idselec'];
                $idselec=$idselec+1;
 
 if($insertar==1){
  if( $requi->insertar($convocatoria,$id,$estado) ){


      $descripcion= "Tabla: validacion  Convocatoria: ".$convocatoria." postulante: ".$postulante." estado: ".$estado;

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
if ($estado=='A'){

 $db = new Conexion();
 $db->conectar();
  $query = "call insertar_seleccion('$idselec','$id','$convocatoria')";
       

        $query2= $db->consulta($query);

  $db->desconectar();
  // Step 1: Declare new NexmoMessage.
  $nexmo_sms = new NexmoMessage('13571e07', '4909704d772253f0');

  // Step 2: Use sendText( $to, $from, $message ) method to send a message. 
  $info = $nexmo_sms->sendText( '+59176896801', 'RH-SYSTEM', 'Felecidades '.$postulante.' su curriculum fue seleccionado, favor pase por nuestras oficinas                                             . ' );
   
  }

    echo 'datos ingresado correctamente';



  }else{
   echo 'datos no ingresado correctamente';
  }}else{echo 'Ud. no tiene los permisos necesarios para realizar esta operacion';}
      






?>