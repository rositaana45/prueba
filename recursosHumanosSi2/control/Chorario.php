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
include_once('../entidad/Ehorario.php');
include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
 $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();
    $requi = new Ehorario();
    $horarioentrada = htmlspecialchars($_POST['horarioentrada']);
    $horariosalida = htmlspecialchars($_POST['horariosalida']);
    $descripcion = htmlspecialchars($_POST['descripcion']);


    if( $requi->insertar($horarioentrada,$horariosalida,$descripcion)){

    	$descripcion = "Tabla: horario  entrada: ".$horarioentrada." Salidad: ".$horariosalida." Descripcion: ".$descripcion;

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