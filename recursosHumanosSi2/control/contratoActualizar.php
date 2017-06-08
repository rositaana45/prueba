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
include_once('../entidad/Econtrato.php');
include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
  $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();

    $requi = new Econtrato();
    $clausula = htmlspecialchars($_POST['clausula']);
    $fecha = htmlspecialchars($_POST['fecha']); 
    $empresa = htmlspecialchars($_POST['empresa']);
    $salario = htmlspecialchars($_POST['salario']);
    $vigencia = htmlspecialchars($_POST['vigencia']);
    $tipo = htmlspecialchars($_POST['tipo']);
    $vacaciones = htmlspecialchars($_POST['vacaciones']);
    $seguro = htmlspecialchars($_POST['seguro']);
    $id = htmlspecialchars($_POST['id']); 
    
     
         if($actualizar==1){


    if( $requi->actualizar($id,$clausula,$fecha,$empresa,$salario,$vigencia,$tipo,$vacaciones,$seguro)){

    	$descripcion= "Tabla: Contrato  clausula: ".$clausula."fecha: ".$fecha."nombre de la empresa: ".$empresa."salario: ".$salario."vigencia: ".$vigencia."tipo: ".$tipo."vacaciones: ".$vacaciones."seguro: ".$seguro;

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
    	
    echo 'datos ingresado correctamente';
  }else{
   echo 'datos no ingresado correctamente';
  }}else{echo 'Ud. no tiene los permisos necesarios para realizar esta operacion';}

?>