
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
<title>Contrato | RHSystem</title>

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
			$(".content-loader").load('contratoIngresar.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
	});
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('contrato.php');
			$("body").fadeIn('slow');
			window.location.href="contrato.php";
		});
	});
	
});
</script>

</head>

<body bgcolor="RED">
    <?php require('../php/header.php'); ?>
    <div class="pager"></div>
    <div class="pager"></div>
    <div class="pager"></div>
	<div class="container">
      

        <h3><img class="img-circle" src="../img/profesion.png" alt="">&nbsp;&nbsp;	Contrato</h3><hr/>

<?php

if($insertar==1){
    echo '
        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Añadir Contrato</button>

';}   
?>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; Ver Contrato</button>
        <hr />
        
        <div class="content-loader">
        <table cellspacing="0" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th class="col-lg-1"> ID</th>
        <th class="col-lg-1">Acciones</th>
		<th class="col-lg-1">clausula</th>  
		<th class="col-lg-1">fecha</th>
        <th class="col-lg-1">Empresa</th> 
        <th class="col-lg-1">salario</th>  
        <th class="col-lg-1">vigencia</th>
        <th class="col-lg-1">tipo</th>
        <th class="col-lg-1">Dias Vacacion</th>
        <th class="col-lg-1">Id seguro</th>
        </tr>
        </thead>
        <tbody>
        <?PHP
               include_once('../entidad/conexion.php');
                
                $db = new Conexion;
                 
				$db->conectar();
                $query = "CALL mostrarContrato()";
                $resultadoEmpresa = $db->consulta($query);

		 while ($fila=$db->fetch_array($resultadoEmpresa)){
			?>
			<tr>
			<td><?php echo $fila['idContrato']; ?></td>
            <td class="text-center">

                 <?php
if($actualizar==1){
    echo '
                    <a style="text-decoration:none;" id='.$fila['idContrato'].' class="edit-link" href="#" title="Actualizar"><span class="glyphicon glyphicon-edit">&nbsp;</span>
                    </a>
                    ';}   
?>

                    <a style="text-decoration:none;" id="<?php echo $fila['idContrato']; ?>" class="delete-link" href="#" title="Eliminar"><span class="glyphicon glyphicon-trash">&nbsp;</span>
                    </a>            
                    <a id="<?php/* echo $row['ID'];*/ ?>" class="#" href="#" title="Imprimir"><span class="glyphicon glyphicon-eye-open"></span>
                    </a>
            	</td>
			<td><?php echo $fila['clausula']; ?></td>		
        	<td><?php echo $fila['fecha']; ?></td>
        	<td><?php echo $fila['nombreEmpresa']; ?></td>	
        	<td><?php echo $fila['salario']; ?></td>
        	<td><?php echo $fila['vigenciaContrato']; ?></td>
        	<td><?php echo $fila['tipo']; ?></td>	
        	<td><?php echo $fila['diasVacaciones']; ?></td>	
        	<td><?php echo $fila['idSeguroSocial']; ?></td>	
			</tr>
			<?php
		}   $db->desconectar();
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

<script type="text/javascript" src="../crud/crudContrato.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>
</body>
</html>