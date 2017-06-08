 <?php
session_start();
$usuario=$_SESSION['usuario'];
$idIni=$_SESSION['idIni'];
$grupoId=$_SESSION['grupoId'];
$insertar=$_SESSION['insertar'];
$actualizar=$_SESSION['actualizar'];
$vistas=$_SESSION['vistas'];
?>

 <!-- <link rel="stylesheet" href="../bootstrap/css/ui.css">
  <script src="../bootstrap/js/jquery-1.12.3.min.js"></script>
  <script src="../bootstrap/js/ui.js"></script>
  <script type="text/javascript">
$(function() {
            $("#cod").autocomplete({
                source: "post.php",
                minLength: 2,
                select: function(event, ui) {
					event.preventDefault();
                    $('#cod').val(ui.item.cod);
					$('#nombre').val(ui.item.nombre);
					//$('#precio').val(ui.item.precio);
					$('#cod').val(ui.item.curriculum);
			     }
            });
		});
</script> -->
<style type="text/css">
#dis{
	display:none;
}
</style>

<div id="dis">
    <!-- mensaje de alerta -->
</div>
<form method='post' id='emp-SaveForm' action="#">
 
    <table class='table table-bordered'>
 		
        <tr>
            <td>ID Curriculum</td>
            <input type="hidden" id="curriculum">
            <td><input type='text' name='cod' id="cod" class='form-control' ></td>
        </tr>
       
        <tr>
            <td>Nombre | Apellidos</td>
            <td><input type='text' name='nombre' id="nombre" class='form-control' readonly></td>
        </tr>
        
        <tr>
            <td>Cargo Postular</td>
            <td><textarea class="form-control" name="carta" required></textarea></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Guardar este Registro
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
