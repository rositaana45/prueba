
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
include_once('../entidad/Erequisitos.php');
include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
  $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();

    $requi = new Erequisitos();
    $convocatoria = htmlspecialchars($_POST['convocatoria']);
    $descripcion = htmlspecialchars($_POST['descripcion']);


         if($insertar==1){


    if( $requi->insertar($convocatoria,$descripcion) ){

    	$descripcion= "Convocatoria: ".$convocatoria." Descripcion: ".$descripcion;

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
  }}else{ echo 'Ud. no tiene los permisos necesarios para realizar esta operacion';}

?>