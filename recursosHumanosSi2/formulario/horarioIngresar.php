<?php
session_start();
$usuario=$_SESSION['usuario'];
$idIni=$_SESSION['idIni'];
$grupoId=$_SESSION['grupoId'];
$insertar=$_SESSION['insertar'];
$actualizar=$_SESSION['actualizar'];
$vistas=$_SESSION['vistas'];
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
            <td>Hora Entrada</td>
           <td><input type='time' name='horarioentrada' class='form-control' placeholder='Ingrese hora entrada' required /></td>
        </tr>
		
     
     <tr>
            <td>Hora Salida</td>
           <td><input type='time' name='horariosalida' class='form-control' placeholder='Ingrese hora salida' required /></td>
        </tr>

        <tr>
            <td>Descripcion</td>
            <td><input type='text' name='descripcion' class='form-control' placeholder='Ingrese Descripcion' required /></td>
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
     
