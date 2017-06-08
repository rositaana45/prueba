

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

 $db = new Conexion();
 $db->conectar();
$vacan = new Evacante();

$cantidad = htmlspecialchars($_POST['cantidad']);
 $convocatoria = htmlspecialchars($_POST['convocatoria']);
 $cargo = htmlspecialchars($_POST['cargo']);

  $query = "call mostrarIdCargo('$cargo')";
       
        $query2= $db->consulta($query);
        
         while ($fila=$db->fetch_array($query2)){
             $id = $fila['idCargo'];
         }

  $db->desconectar();

if($insertar==1){
  if( $vacan->insertar($id,$convocatoria,$cantidad) ){


      $descripcion= "Tabla: vacante  Cantidad: ".$cantidad." Convocatoria: ".$convocatoria." cargo: ".$cargo;

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
    echo 'datos incresado correctamente';
  }else{
   echo 'datos no incresado correctamente';
  }}else{echo 'Ud. no tiene los permisos necesarios para realizar esta operacion';}
      

?>