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
include_once('../entidad/Easigna.php');
	include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
  $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();
	
     $requi = new Easigna();
    $id = htmlspecialchars($_POST['id']);
    $cargo = htmlspecialchars($_POST['cargo']);
    $departamento = htmlspecialchars($_POST['departamento']);
  
        

         if($actualizar==1){
   
		
    if( $requi->actualizar($id,$cargo,$departamento)){
	
	$descripcion= "Tabla: Asigna  Id: ".$id." Cargo: ".$cargo." Departamento: ".$departamento;

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
   echo 'datos no ingresado correctamente';
  }        
  }else{echo "Ud. no tiene los privilegios necesarios para realizar esta operacion";}
   
?> 