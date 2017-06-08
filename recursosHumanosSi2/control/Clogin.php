<?php
include_once('../entidad/Elogin.php');



$usuario = $_REQUEST['usuario'];
$password = $_REQUEST['password'];

  
                $db = new Conexion;
				$db->conectar();

                $query = "CALL mostrarExisteUsuario('$usuario','$password')";
                $resultadoEmpresa = $db->consulta($query);

                	$db->desconectar();
		 while ($fila=$db->fetch_array($resultadoEmpresa)){

		 	$cantidadlogin=$fila['cantidad'];
		 	$estado=$fila['estado'];
		 	$grupoId=$fila['idGrupo'];
		 }
			
         

  
      if($cantidadlogin==1){

if($estado==1){

include_once('CverificarActualizar.php');
include_once('CverificarInsertar.php');
include_once('CverificarVistas.php');
$vacan = new Elogin();
	session_start();
$_SESSION['usuario']=$_REQUEST['usuario'];
$_SESSION['grupoId']=$grupoId;
$_SESSION['insertar']=$insertar;
$_SESSION['actualizar']=$actualizar;
$_SESSION['vistas']=$vistas;


if( $vacan->iniciarSision($usuario) ){

			 $db = new Conexion;
				$db->conectar();

                $query = "CALL mostrar_idInicio_ultimo()";
                $resultadoEmpresa = $db->consulta($query);

                	$db->desconectar();
		 while ($fila=$db->fetch_array($resultadoEmpresa)){

		 	$idIni=$fila['idIni'];
		 	
		 }

 $_SESSION['idIni']=$idIni;

				echo "<html>
	<head>
	</head>
	<body>
	<meta http-equiv='refresh' content='0; url=../formulario/panel.php'>
	<script>
	alert('bienvenido');
	</script>
	</body>
	</html>>";}
				/*echo "Datos ingresados correctamente";*/
		else{

			echo "<html>
	<head>
	</head>
	<body>
	<meta http-equiv='refresh' content='0; url=../index.php'>
	<script>
	alert('introdusca correctamente los datos');
	</script>
	</body>
	</html>>";

	}

}else{

	echo "<html>
	<head>
	</head>
	<body>
	<meta http-equiv='refresh' content='0; url=../index.php'>
	<script>
	alert('Sr. usuario su cuenta se encuentra suspendida.. consulte con su administrador');
	</script>
	</body>
	</html>>";
}



}else{

	echo "<html>
	<head>
	</head>
	<body>
	<meta http-equiv='refresh' content='0; url=../index.php'>
	<script>
	alert('introdusca correctamente los datos');
	</script>
	</body>
	</html>>";

	}

   
     
?>