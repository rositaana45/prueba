<?php
$usuario= strip_tags($usuario);
$fecha= time();
$fechaFormato=date("j/n/y",$fecha);

$cabecera="MIME-VERSION: 1.0";
$cabecera.="Content-type: text/html; Charset=UTF-8";
$cabecera.="From: Mensaje Enviado por RHSYSTEM";
$asunto="Enviado por Usuario: ".$usuario." Personal RHSYSTEM";
$correoDestino=$emailPostu;
$cuerpo="Correo enviado por: ".$usuario." Personal RHSYSTEM";
$cuerpo.="Email: matilde_123@hotmail.com";
$cuerpo.="enviado fecha: ".$fechaFormato;
$cuerpo.="Mensaje: Su Curriculum fue aceptado, favor pasar por las oficinas de la empresa";

/*
$mensaje = "Bienvenido a RHSystem\n\n"; $mensaje .= "Felicidades Hemos Comprobado que su Correo Exite:\n"; $mensaje .= "para brindarle la información necesario\n"; $mensaje .= "y desde luego de aqui en adelante pueda postulanse a la vacante.\n\n"; $mensaje .= "Los pasos son:\n\n -crear un Curriculum.\n\n -crear posrulacion.\n\n -crear solicitud a la vacante.\n\n"; $mensaje .= "Debes activar tu correo pulsando este enlace: http://organicgroup.esy.es/crear_curriculum/crear_curriculum.php";
$asunto = "Activación de tu cuenta en RRHH";*/

if(mail($correoDestino,$asunto,$cuerpo,$cabecera)){
	echo "correo enviado satisfactoriamente";
}else
{
	echo "Error al enviar el correo";
}
?>