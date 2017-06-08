
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
include_once('../entidad/Ecurriculum.php');
include_once('../entidad/conexion.php');
$vacan = new Ecurriculum();


$bachillerHumanidades = $_POST['bachiller'];
$domicilio = $_POST['domicilio'];
$email = $_POST['email'];
$idiomaNativo = $_POST['nativo'];
$idiomaExtranjero = $_POST['extranjero'];
$lugarNacimiento= $_POST['lugarNaci'];
$nacionalidad = $_POST['Nacionalidad'];



$ci= $_POST['ci'];
$fechaNacimiento = $_POST['fecha'];
 $nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
 $telefono = $_POST['telefono'];
 

$descripcion = $_POST['Academico'];
 
$lugarTrabajo = $_POST['lugarTrabajo'];
$tiempoTrabajo= $_POST['tiempo'];
$cargo = $_POST['cargo'];
$motivoExtincionContrato = $_POST['extincion'];
 


		if( $vacan->insertar_curriculum($bachillerHumanidades, $domicilio, $email, $idiomaExtranjero, $idiomaNativo, $lugarNacimiento, $nacionalidad) ){
				$db = new Conexion();
				$db->conectar();
		
				$query = "call mostrar_idCurriculum_ultimo()";
       
				$query2= $db->consulta($query);
        
				while ($fila=$db->fetch_array($query2)){
					$id = $fila['id'];
				}
				$db->desconectar();
		  
		  
				if($vacan->insertar_Laboral($lugarTrabajo, $tiempoTrabajo, $cargo, $motivoExtincionContrato,$id)){
		
					if($vacan->insertar_Academico( $descripcion,$id)){
					
							if($vacan->insertar_Postulante($ci, $fechaNacimiento, $nombre, $sexo, $telefono,$id)){
			
								echo "Datos ingresados correctamente";  
					
							}else{
					
							echo "Datos no ingresados correctamente";  
					
							}
					}else{
			
					echo "Datos no ingresados correctamente";  
						}
     
     
				}else{
				if($vacan->eliminar_Curriculum($id)){
				echo "Datos no ingresados correctamente";}
				}  
	
		}else{
		
		echo "Datos no ingresados correctamente";}  
  
      
?>