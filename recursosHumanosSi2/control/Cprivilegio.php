
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
include_once('../entidad/Eprivilegio.php');
include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');

  $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();

		$vacan = new Eprivilegio();


$operacion = $_REQUEST['idoperacion'];

$grupo = $_REQUEST['idgrupo'];


         

		if( $vacan->insertar_privilegio($operacion,$grupo)){


    	$descripcion = "Tabla: Privilegio "."Operacion: ".$operacion." Grupo: ".$grupo;

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
				
				echo "Datos ingresados correctamente";
		}else{
		
		echo "Datos no ingresados correctamente";} 
  
      
?>