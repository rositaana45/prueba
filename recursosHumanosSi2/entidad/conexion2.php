<?php 
$mysqli=new mysqli("localhost","root","admisiones","rh");

if (mysqli_connect_errno()){
	echo 'conexion Fallida: ', mysqli_connect_error();
	exit();
}
?>