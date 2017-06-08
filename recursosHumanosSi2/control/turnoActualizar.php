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
	
	if ($_POST)
	{  
     $requi = new Eturno();
    $id = htmlspecialchars($_POST['id']);
    $estado = htmlspecialchars($_POST['estado']);
    $horario = htmlspecialchars($_POST['horario']);
    $empleado = htmlspecialchars($_POST['empleado']);
        
    if( $requi->actualizar($id,$estado,$horario,$empleado)){

        $descripcion= "Tabla: turno  ID: ".$id." Estado: ".$estado." Horario: ".$horario." Empleado: ".$empleado;

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