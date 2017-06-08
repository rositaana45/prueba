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
include_once('../entidad/Egrupo.php');

	include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
 $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();
	
     $requi = new Egrupo();
    $id = htmlspecialchars($_POST['id']);
    $categoria = htmlspecialchars($_POST['descripcion']);
    
        

    if( $requi->actualizar_grupo($id,$categoria)){

        $descripcion = "Tabla: Grupo ID: ".$id." categoria: ".$descripcion;

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
   
?> 