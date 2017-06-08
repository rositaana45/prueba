<?php
session_start();
$usuario=$_SESSION['usuario'];
$idIni=$_SESSION['idIni'];
$grupoId=$_SESSION['grupoId'];
$insertar=$_SESSION['insertar'];
$actualizar=$_SESSION['actualizar'];
$vistas=$_SESSION['vistas'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="coloring, drag and drop, svg, material design, mockup, website" />
<title>Panel | RHSystem</title>

<link href="../bootstrap/css/estilo.css" rel="stylesheet" media="screen">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
   
</head>

<body>
      <?php require('../php/header.php'); ?>

<!------------------------------------------Sliders----------------------------------- -->
<div class="pager"></div>
<section class="paint-area">
  <div class="jumbotron text-center">
    <div class="container">
      <div class="row">
        <div class="col-xs12">
          <h1>Bienvenido </h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, deleniti, ea nisi suscipit atque tempore aspernatur harum unde veritatis neque rem dolores assumenda. Recusandae facilis dolores cum iste assumenda accusamus.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-------------------------------------------contenido-------------------------------------- -->
<section class="paint-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1>Lorem ipsum dolor sit amet</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, magni, doloribus, possimus eum sapiente deleniti doloremque fugit ut expedita molestiae iusto debitis eveniet modi obcaecati ipsam quos quis labore dicta.</p>
		<button type="button" class="btn btn-success">Get in touch</button>
      </div>
    </div>
  </div>
</section>
<hr>
<div class="section well">
    <div class="container">
   	  <div class="row">
		<div class="col-lg-4 col-md-4">
            <h3 class="text-center">WHO WE ARE</h3>
            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, ducimus, sit, quibusdam quidem recusandae veniam eos quod error nisi repellat excepturi laboriosam aspernatur suscipit possimus consectetur dolores nihil labore quas eius illo accusamus nulla sed blanditiis porro accusantium. Perspiciatis, perferendis!</h5>
        </div>
		<div class="col-lg-4 col-md-4">
		  <h3 class="text-center">GET IN TOUCH</h3>
          <address class="text-center">
  <strong>MyCompany, Inc.</strong><br>
  Sunny Autumn Plaza, Grand Coulee,<br>
  CA, 91308-4075, US<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>
</div>
		<div class="col-lg-4 col-md-4">
		  <h3 class="text-center">NEWSLETTER</h3>
          <form>
    <div class="form-group col-lg-9 col-md-8 col-sm-10 col-xs-10">
<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    </div>
<button type="submit" class="btn btn-default">Subscribe<br>
</button>
</form>
		</div>
</div>
    </div>
	</div>
    <footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © MyCompany. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
   	
    <script type="text/javascript" src="../bootstrap/js/jquery-1.11.3-jquery.min.js"></script>    
    <script type="text/javascript" src="../bootstrap/js/bootstrap-3.1.1.min.js"></script> 

</body>
</html>
