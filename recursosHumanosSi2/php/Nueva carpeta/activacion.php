<?php
$correo = $_POST['email']; //...

//<-- Tus rutinas para validar los datos, si están completos etc...
/*if(empty($usuario)){
    echo "Debes poner algo como usuario";
    exit;}*/
//-->
/*$aleatorio = uniqid(); //Genera un id único para identificar la cuenta a traves del correo. $contrasena = rand(1999, 9999); //Devuelve un número aleatorio entre los dos rangos. Lo usuaremos como
                                //Contraseña temporal.
                                 $sql = "Insert Into tabla (usuario, contrasena, correo, codigo, activo) Values ('$usuario', '$contrasena', '$correo', '$aleatorio', 0)";*/
//Tus rutinas para insertar en la base de datos.
$mensaje = "Bienvenido a RHSystem\n\n"; $mensaje .= "Felicidades Hemos Comprobado que su Correo Exite:\n"; $mensaje .= "para brindarle la información necesario\n"; $mensaje .= "y desde luego de aqui en adelante pueda postulanse a la vacante.\n\n"; $mensaje .= "Los pasos son:\n\n -crear un Curriculum.\n\n -crear posrulacion.\n\n -crear solicitud a la vacante.\n\n"; $mensaje .= "Debes activar tu correo pulsando este enlace: http://organicgroup.esy.es/crear_curriculum/crear_curriculum.php";
$asunto = "Activación de tu cuenta en RRHH";

if(mail($correo,$asunto,$mensaje)){
		?>
        	<script>
                alert('Se ha enviado un mensaje a tu correo electronico para validar ;)');
                window.location.href='http://organicgroup.esy.es';
            </script>
		<?php
}else{
		?>
        	<script>
                alert('Ha ocurrido un error y no se puede enviar el correo ;(');
                window.location.href='http://organicgroup.esy.es';
            </script>
		<?php
}
?>