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
include_once('../entidad/Eempleado.php');
include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
  $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();
	
	if ($_POST)
	{  
     $requi = new Eempleado();
    $id = htmlspecialchars($_POST['id']);
    $contrato = htmlspecialchars($_POST['contrato']);
    $postulante = htmlspecialchars($_POST['postulante']);
    $asigna = htmlspecialchars($_POST['asigna']);
    $habilitado = htmlspecialchars($_POST['habilitado']);
        
    if( $requi->actualizar($id,$contrato,$postulante,$asigna,$habilitado)){


      $descripcion= "Tabla: Empleado  ID: ".$id." Contrato: ".$contrato." Empleado: ".$postulante." Asigna: ".$asigna." Habilitado: ".$habilitado;

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