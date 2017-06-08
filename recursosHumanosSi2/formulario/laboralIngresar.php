
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
$id=$_REQUEST['id'];
?>
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

			<td><select class="form-control" name="idCu" id="cargo">     
               
			 <option value=<?php echo $id; ?>><?php echo $id; ?></option>
               
             </select></td>
 
		</tr>
		
        <tr>
            <td>Lugar de trabajo</td>
            <td><input type='text' name='lugarTrabajo' class='form-control' placeholder='Ingrese una Descripcion' required /></td>
        </tr>
		 <tr>
            <td>Tiempo Trabajado</td>
            <td><input type='text' name='tiempoTrabajado' class='form-control' placeholder='Ingrese una Descripcion' required /></td>
        </tr>
		 <tr>
            <td>Cargo</td>
            <td><input type='text' name='cargo' class='form-control' placeholder='Ingrese una Descripcion' required /></td>
        </tr>
		 <tr>
            <td>Motivo Extincion Contrato</td>
            <td><input type='text' name='motivo' class='form-control' placeholder='Ingrese una Descripcion' required /></td>
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
     
