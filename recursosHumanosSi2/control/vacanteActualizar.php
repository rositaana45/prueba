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
include_once('../entidad/Evacante.php');
	include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
  $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();

	if ($_POST)
	{
        
    $requi = new Evacante();   
    $idConvocatoria =  htmlspecialchars($_POST['idConvocatoria']);
    $idCargo = htmlspecialchars($_POST['idCargo']);    
    $Convocatoria =  htmlspecialchars($_POST['Convocatoria']);
    $nCargo = htmlspecialchars($_POST['Cargo']);
    $cantidad =  htmlspecialchars($_POST['cantidad']);

    
         if($actualizar==1){
   

    if($requi->actualizar($nCargo,$Convocatoria,$idCargo,$idConvocatoria,$cantidad))		
			{

				$descripcion= "Tabla: vacante  idConv: ".$idConvocatoria." idCargo: ".$idCargo." Convocatoria: ".$Convocatoria." NCargo: ".$nCargo." Cantidad:".$cantidad;

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

				echo "Se Actualizo Correctamente un Vacante";
			}
			else{
				echo "No se Actualizo Correctamente un Vacante";
			}    
        
        
   }else{ echo "Ud. no tiene los privilegios necesarios para realizar esta operacion";}
   }
?> 