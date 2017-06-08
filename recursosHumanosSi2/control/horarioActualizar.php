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
	
	if ($_POST)
	{  
     $requi = new Ehorario();
    $id = htmlspecialchars($_POST['id']);
    $horaEntrada = htmlspecialchars($_POST['horaEntrada']);
    $horaSalida = htmlspecialchars($_POST['horaSalida']);
    $descripcion = htmlspecialchars($_POST['descripcion']);
  
        
    if( $requi->actualizar($id,$horaEntrada,$horaSalida,$descripcion)){


      $descripcion= "Tabla: Horario  ID: ".$id." entrada: ".$horaEntrada." salida: ".$horaSalida." descripcion: ".$descripcion;

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


     echo 'datos actualizado correctamente';
     }else{
     echo 'datos no actualizado correctamente';
     }        
   }
?> 