
<?php

if(!empty($_REQUEST['usu'])&&!empty($_REQUEST['pas'])){

$usu=$_REQUEST['usu'];
$pas=$_REQUEST['pas'];
$cnx=new PDO("mysql:host=mysql.hostinger.es;dbname=u941593827_rh","u941593827_adm","admisiones");
/*$cnx=new PDO("mysql:host=localhost;dbname=rh","root","admisiones");*/
$res=$cnx->query("SELECT * from usuario WHERE usuario.nombreUsuario='$usu' and usuario.contrasena='$pas'");
$datos=array();
foreach ($res as $row) {
  $datos[]=$row;
}

echo json_encode($datos);
} else{
echo '<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Index | RHSystem</title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/css/estilo.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" style="opacity:0.7;">
  <div class="container"> 
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myDefaultNavbar1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">RHSystem</a> </div>
  
  </div>
  
</nav>';

?>

<?php require_once('php/slider.php');?>

   <script src="bootstrap/js/jquery-1.11.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
<?php
}
?>