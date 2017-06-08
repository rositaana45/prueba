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
include_once('../entidad/Edepartamento.php');
include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
  $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();

    $requi = new Edepartamento();
    $nombre = htmlspecialchars($_POST['nombre']);
    $detalle = htmlspecialchars($_POST['detalle']);


      $db = new Conexion;
         $db->conectar();

                $query2 = "CALL mostrar_sitienen_privilegio('$grupoId','1')";
                $resultadoEmpresa2 = $db->consulta($query2);

                  $db->desconectar();

     while ($fila2=$db->fetch_array($resultadoEmpresa2)){

          $cantidad=$fila2['cantidad'];
      
         }

         if($cantidad==1){


    if( $requi->insertar($nombre,$detalle)){

    	$descripcion= "Nombre: ".$nombre." Detalle: ".$detalle;

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