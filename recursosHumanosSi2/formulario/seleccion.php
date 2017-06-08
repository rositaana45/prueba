<?php
session_start();
$usuario=$_SESSION['usuario'];
$idIni=$_SESSION['idIni'];
$grupoId=$_SESSION['grupoId'];
$insertar=$_SESSION['insertar'];
$actualizar=$_SESSION['actualizar'];
$vistas=$_SESSION['vistas'];
?>

<?php
if($_REQUEST['convocatoria']){
        
              include_once('../entidad/conexion.php');
                $db = new Conexion;
                $resu = $_REQUEST['convocatoria'];
				$db->conectar();
    
                $query = "CALL mostrarSeleccion('$resu')";
                $resultado = $db->consulta($query); 
    
}else{
                include_once('../entidad/conexion.php');
                $db = new Conexion;
				$db->conectar();
    
                $query = "CALL mostrarSeleccionTodo()";
                $resultado = $db->consulta($query); 

}
  $db->desconectar();

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seleccion | RHSystem</title>

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
			$(".content-loader").load('seleccionIngresar.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
	});
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('seleccion.php');
			$("body").fadeIn('slow');
			window.location.href="seleccion.php";
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
      
        <h3><img class="img-circle" src="../img/vacaciones.png" alt="">&nbsp;&nbsp;Seleccionar</h3><hr/>
        <hr />      
        
 <form method='post' id='emp-SaveForm' action= "seleccion.php">        
           <div class="text-center">
           <div class="form-inline">
                 <label>Convocatoria</label>
            
                 <select class="form-control" name="convocatoria" id="convocatoria">     
                 <?PHP
             include_once('../entidad/conexion.php');       
                $db = new Conexion;
				$db->conectar();
                $query = "CALL mostrarConvocatoria()";
                $resultadoEmpresa = $db->consulta($query);
                
                ?>
				<?php 
                 while ($fila=$db->fetch_array($resultadoEmpresa)){
				echo "<option value='".$fila['0']."'> ".$fila['0']."</option>";
                }
                  $db->desconectar();
                ?>
             </select>
             
        <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-eye-open"></span> mostrar
			</button>
        </td>  
        </div>
        </div>
        
        </form>   
  
        
        <br>

         
         
        
        <div class="content-loader">
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="col-lg-1"> idSeleccion</th>
               <!-- <th class="col-lg-1">Acciones</th> -->
                <th class="col-lg-1">Nombre</th>
                <th class="col-lg-1">idConvocatoria</th>
                <th class="col-lg-1">Estado</th>                
            </tr>
        </thead>
        <tbody>
    <?PHP
                 
		 while ($fila=$db->fetch_array($resultado)){
			?>
               <tr>
                <td><?php echo $fila['idSeleccion']; ?></td>   
              <!--   <td class="text-center">  
                  <a style="text-decoration:none;" id="<?php echo $row['ID']; ?>" class="edit-link" href="#" title="Actualizar"><span class="glyphicon glyphicon-edit">&nbsp;</span>
                   </a>
			       <a style="text-decoration:none;" id="<?php echo $row['ID']; ?>" class="delete-link" href="#" title="Eliminar"><span class="glyphicon glyphicon-trash">&nbsp;</span>
                   </a>         
                    <a id="<?php  ?>" class="delete-link" href="#" title="Imprimir"><span class="glyphicon glyphicon-print"></span>
                    </a> 
  
            	</td>-->
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['idConvocatoria']; ?></td>
                <td><?php echo $fila['estado']; ?></td>  
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

<script type="text/javascript" src="crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();
});

</script>
</body>
</html>