
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Curriculum | RHSystem</title>

<link href="../bootstrap/css/estilo.css" rel="stylesheet" media="screen">

<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="../bootstrap/css/dataTables.bootstrap4.min.css" rel="stylesheet" media="screen">
<link href="../bootstrap/css/responsive.bootstrap4.min.css" rel="stylesheet" media="screen">

<script type="text/javascript" src="../bootstrap/js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	$("#btn-view").hide();
	
	$("#btn-add").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('curriculumIngresar.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
	});
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('curriculum.php');
			$("body").fadeIn('slow');
			window.location.href="curriculum.php";
		});
	});
	
});
</script>

</head>

<body>
    <?php require('../php/header.php'); ?>
    <div class="pager"></div>
    <div class="pager"></div>
    <div class="pager"></div>
	<div class="container">
      
        <h3><img class="img-circle" src="../img/curriculum.png" alt="">&nbsp;&nbsp;	Curriculum</h3><hr/>

<?php

if($insertar==1){
	echo '
        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Añadir Curriculum</button>
     ';}   
?>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; Ver Curriculum</button>
        <hr />
        
        <div class="content-loader">
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
        <tr>
        <th> ID</th>
        <th>Acciones</th>   
        <th>BachillerHumanidades</th>
        <th>Domicilio</th>
		 <th>Email</th>
		<th>IdiomaExtrangero</th>
        <th>IdiomaNativo</th>
        <th>LugarNacimiento</th>        
        <th>Nacionalidad</th>
		
		 <th>CI</th>
        <th>fechaNacimiento</th>
        <th>nombre</th>
        <th>sexo</th>        
        <th>telefono</th>
        </tr>
        </thead>
        <tbody>
	
		 <?PHP
		 include "../entidad/conexion.php";
                $db = new Conexion;
                 
				$db->conectar();
                $query = "CALL mostrarCurriculumPostulante()";
                $resultadoEmpresa = $db->consulta($query);

		 while ($fila=$db->fetch_array($resultadoEmpresa)){
		 $idCu=$fila['idCurriculum'];
			?>
	
			<tr>            
			<td><?php  echo $idCu; ?></td>
            <td class="text-center">
            <?php
if($actualizar==1){
	echo '
			<a style="text-decoration:none;" id='.$idCu.' class="edit-link" href="#" title="Actualizar"><span class="glyphicon glyphicon-edit">&nbsp;</span>
            </a>';}?>
			<a style="text-decoration:none;" id="<?php echo $idCu;?>" class="delete-link" href="#" title="Eliminar"><span class="glyphicon glyphicon-trash">&nbsp;</span>
            </a>            
			<a id="<?php /*echo $row['ID']; */?>" class="delete-link" href="#" title="Imprimir"><span class="glyphicon glyphicon-print">&nbsp;</span>
            </a>
			<a style="text-decoration:none;" id="<?php ?>" class="" href="academico.php?idCu= <?php echo $idCu?>" title="Academico"><span class="glyphicon glyphicon-edit">&nbsp;</span>
            </a>
			<a style="text-decoration:none;" id="<?php ?>" class="" href="laboral.php?idCu= <?php echo $idCu?>" title="Laboral"><span class="glyphicon glyphicon-edit">&nbsp;</span>
            </a>
            </td>
		   <td><?php echo $fila['bachillerHumanidades']; ?></td>
			<td><?php echo $fila['domicilio']; ?></td>
			<td><?php echo $fila['email']; ?></td>
            <td><?php echo $fila['idiomaExtranjero']; ?></td>
            <td><?php echo $fila['idiomaNativo']; ?></td>
            <td><?php echo $fila['lugarNacimiento']; ?></td>
            <td><?php echo $fila['nacionalidad']; ?></td>
			
			<td><?php echo $fila['ci']; ?></td>
            <td><?php echo $fila['fechaNacimiento']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['sexo']; ?></td>
            <td><?php echo $fila['telefono']; ?></td>
            
			
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        </div>

    </div>
    
    <br />
    
<?php include_once('../php/footer.php'); ?>
    
<script type="text/javascript" src="../bootstrap/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript" src="../bootstrap/js/bootstrap-3.1.1.min.js"></script>

<script type="text/javascript" src="../crud/crudCurriculum.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>