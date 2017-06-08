
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
  $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();
	if ($_POST)
	{
        
    $requi = new Evalidacion();   
    $idConvocatoria =  htmlspecialchars($_POST['idConvocatoria']);
    $idPostulante = htmlspecialchars($_POST['idPostulante']);    

    $Convocatoria =  htmlspecialchars($_POST['Convocatoria']);
    $postulante = htmlspecialchars($_POST['postulante']);
    $estado =  htmlspecialchars($_POST['estado']);

    if($estado == 1){
    $estado = 'A';
    }else{
    $estado = 'R';
    }


 $db = new Conexion();
 $db->conectar();

 $query = "call mostrarCorreo('$idPostulante')";
       
        $query2= $db->consulta($query);
        
         while ($fila=$db->fetch_array($query2)){
             $emailPostu=$fila['email'];
         }

  $db->desconectar();
    

if($actualizar==1){
    if($requi->actualizar($idPostulante,$idConvocatoria,$postulante,$Convocatoria,$estado))		
			{



      $descripcion= "Tabla: validacion  Convocatoria: ".$Convocatoria." postulante: ".$postulante." estado: ".$estado;

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

                if ($estado=='A'){
                include_once('../control/enviarEmail.php');}

				echo "Se Actualizo Correctamente una Validacion";
			}
			else{
				echo "No se Actualizo Correctamente una Validacion";
			}    
        
        }else{echo 'Ud. no tiene los permisos necesarios para realizar esta operacion';}
   }
?> 