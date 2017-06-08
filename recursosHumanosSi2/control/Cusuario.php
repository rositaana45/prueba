
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
include_once('../entidad/Eusuario.php');
include_once('../entidad/Ebitacora.php');
include_once('../entidad/EsubOperacion.php');
  $vacan2 = new EsubOperacion();
    $vacan3 = new Ebitacora();

		$vacan = new Eusuario();


$nickname = $_REQUEST['nickname'];
$password = $_REQUEST['password'];
$correo = $_REQUEST['correo'];
$estado = $_REQUEST['estado'];
$empleado = $_REQUEST['empleado'];
$grupo = $_REQUEST['grupo'];


         

		if( $vacan->insertar_usuario($nickname,$password,$correo,$estado,$empleado,$grupo)){


    	$descripcion = "Tabla: usuario "."Nombre: ".$nickname." Correo: ".$correo."Estado: ".$estado."Empleado: ".$empleado."Grupo: ".$grupo;

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