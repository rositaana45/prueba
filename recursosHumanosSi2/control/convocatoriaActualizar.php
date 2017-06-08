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
    $id = htmlspecialchars($_POST['id']);
    $cargo = htmlspecialchars($_POST['Cargo']);
    $fechala = htmlspecialchars($_POST['fecha']);
    $hora = htmlspecialchars($_POST['hora']);
    $salario = htmlspecialchars($_POST['salario']);
    $tipo = htmlspecialchars($_POST['tipo']);
    $fechahora = $fechala." ".$hora;


         if($actualizar==1){


    if( $requi->actualizar($id,$cargo,$fechahora,$salario,$tipo)){

    	$descripcion="tabla: convocatoria: "."cargo: ".$cargo." fecha y hora: ".$fechahora."salario: ".$salario."tipo: ".$tipo;

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
    	
    echo 'datos actualizados correctamente';
  }else{
   echo 'datos no ingresado correctamente';
  }}else{echo 'Ud. no tiene los permisos necesarios para realizar esta operacion';}

?>