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
include_once('../entidad/Eentrevista.php');
include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
  $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();

    $requi = new Eentrevista();
    $seleccion = htmlspecialchars($_POST['postulante']);
    $fechala = htmlspecialchars($_POST['fecha']);
    $hora = htmlspecialchars($_POST['hora']);
    $estado = htmlspecialchars($_POST['estado']);
    $fechahora = $fechala." ".$hora;

                $db = new Conexion;
				$db->conectar();
                $query = "CALL mostraIdUsuario('$usuario')";
                $fila = $db->consulta($query); 
                $row=$db->fetch_array($fila);
                $db->desconectar();
                $idusuario=$row['idEmpleado'];

    

         if($insertar==1){


    if( $requi->insertar($fechahora,$estado,$seleccion,$idusuario)){

    	$descripcion="tabla: entrevista "." fecha y hora: ".$fechahora."estado: ".$estado."seleccion: ".$seleccion."usuario: ".$usuario;

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