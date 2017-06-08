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
include_once('../entidad/Econvocatoria.php');
include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
  $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();

    $requi = new Econvocatoria();
    $cargo = htmlspecialchars($_POST['cargo']);
    $fechahora = htmlspecialchars($_POST['fechala']);
    $salario = htmlspecialchars($_POST['salario']);
    $tipo = htmlspecialchars($_POST['tipo']);
    

     
         if($insertar==1){


    if( $requi->insertar($cargo,$fechahora,$salario,$tipo)){

    	$descripcion="tabla: convocatoria "."cargo: ".$cargo." fecha y hora: ".$fechahora."salario: ".$salario."tipo: ".$tipo;

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
  }}else{echo 'Ud. no tiene los permisos necesarios para realizar esta operacion';}

?>