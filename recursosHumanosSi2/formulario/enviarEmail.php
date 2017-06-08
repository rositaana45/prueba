<?php
$usuario= strip_tags($usuario);
$fecha= time();
$fechaFormato=date("j/n/y",$fecha);
$cabecera="MINE-VERSION: 1.0"."\r\n";
$cabecera.="Content-type: text/html; Charset=UTF-8";
$cabecera.="From: Mensaje Enviado por RHSYSTEM";
$correoDestino=$emailPost;
$asunto="Enviado por Usuario: ".$usuario." Personal RHSYSTEM";
$cuerpo="Correo enviado por: ".$usuario." Personal RHSYSTEM"."\r\n";
$cuerpo.="Email: matilde_123@hotmail.com";
$cuerpo.="enviado fecha: ".$fechaFormato;
$cuerpo.="Mensaje: Su Curriculum fue aceptado, favor pasar por las oficinas de la empresa";

if (mail($correoDestino,$asunto,$cuerpo,$cabecera)){

	echo "correo enviado satisfactoriamente";
}else
{
	echo "Error al enviar el correo";
}
?>