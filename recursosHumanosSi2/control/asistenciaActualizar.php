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
include_once('../entidad/Easistencia.php');

	   include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
	
     $requi = new Easistencia();
      $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();

    $id = htmlspecialchars($_POST['id']);
    $fecha = htmlspecialchars($_POST['fecha']);
    $hora = htmlspecialchars($_POST['hora']);
    $tipo = htmlspecialchars($_POST['tipo']);
    $empleado = htmlspecialchars($_POST['empleado']);

    if($actualizar==1){
        
    if( $requi->actualizar($id,$fecha,$hora,$tipo,$empleado)){

        $descripcion= "Tabla: Asistencia  Id: ".$id." Fecha: ".$fecha." Hora: ".$hora." Tipo: ".$tipo." Empleado: ".$empleado;

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
    }else{echo "Ud. no tiene los privilegios necesarios para realizar esta operacion";}
   
?> 