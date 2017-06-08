
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
	
	if ($_POST)
	{
        
    $requi = new Erequisitos();
    $idRequisito =  htmlspecialchars($_POST['idRequisito']);
    $convocatoria =  htmlspecialchars($_POST['idConvocatoria']);
    $descripcion = htmlspecialchars($_POST['descripcion']);

 if($actualizar==1){
    if($requi->actualizar($idRequisito,$convocatoria,$descripcion))		
			{

					$descripcion= "Tabla: Requisito  idRequisito: ".$idRequisito." convocatoria: ".$convocatoria." descripcion: ".$descripcion;

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
				echo "Se Actualizo Correctamente un Cargo";
			}
			else{
				echo "No se Actualizo Correctamente un Cargo";
			}   }else{ echo "Ud. no tiene los privilegios necesarios para realizar esta operacion";}
        
        
   }
?>       