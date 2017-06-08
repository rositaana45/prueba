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
<title>Usuario | RHSystem</title>

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
			$(".content-loader").load('usuarioIngresar.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
	});
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('usuario.php');
			$("body").fadeIn('slow');
			window.location.href="usuario.php";
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
      
        <h3><img class="img-circle" src="../img/profesion.png" alt="">&nbsp;&nbsp;Usuario</h3><hr/>
        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Añadir usuario</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; Ver Usuario</button>
        <hr />
        
        <div class="content-loader">
        <table cellspacing="0" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th class="col-lg-1"> ID</th>
        <th class="col-lg-1">Acciones</th>
		<th class="col-lg-1">Correo</th>  
		<th class="col-lg-1">estado</th>   
		<th class="col-lg-1">idEmpleado</th>
		<th class="col-lg-1">nombre</th>   
		<th class="col-lg-1">idGrupo</th>   
		<th class="col-lg-1">categoria</th> 

        </tr>
        </thead>
        <tbody>
        <?PHP
               include_once('../entidad/conexion.php');
                
                $db = new Conexion;
                 
				$db->conectar();
                $query = "CALL mostrar_usuario()";
                $resultadoEmpresa = $db->consulta($query);

		 while ($fila=$db->fetch_array($resultadoEmpresa)){
			?>
			<tr>
			<td><?php echo $fila['nombreUsuario']; ?></td>
            <td class="text-center">
                    <a style="text-decoration:none;" id="<?php echo $fila['nombreUsuario'];?>" class="edit-link" href="#" title="Actualizar"><span class="glyphicon glyphicon-edit">&nbsp;</span>
                    </a>
                    <a style="text-decoration:none;" id="<?php echo $fila['idLugarTrabajo']; ?>" class="delete-link" href="#" title="Eliminar"><span class="glyphicon glyphicon-trash">&nbsp;</span>
                    </a>            
                    <a id="<?php/* echo $row['ID'];*/ ?>" class="delete-link" href="#" title="Imprimir"><span class="glyphicon glyphicon-print"></span>
                    </a>
            	</td>
			<td><?php echo $fila['correo']; ?></td>		
	<td><?php echo $fila['estado']; ?></td>		
	<td><?php echo $fila['idEmpleado']; ?></td>	
	<td><?php echo $fila['nombre']; ?></td>
	<td><?php echo $fila['idGrupo']; ?></td>		
		<td><?php echo $fila['categoria']; ?></td>			
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

<script type="text/javascript" src="../crud/crudUsuario.js"></script>

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