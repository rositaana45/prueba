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
            <td>Empleado</td>
            <td>
                
             <select class="form-control" name="idConv" id="convocatoria">     
                 <?PHP
               
            include_once('../entidad/conexion.php');
                $db = new Conexion;
                 
               $db->conectar();
                $query = "CALL mostrar_nombre_empleado()";
                $resultadoEmpresa = $db->consulta($query);
                
                ?>
        <?php 
                 while ($fila=$db->fetch_array($resultadoEmpresa)){
        echo "<option value='".$fila['idEmpleado']."'> ".$fila['nombre']."</option>";
                }
                  $db->desconectar();
                ?>
             </select>
   
                    </td>  
        </tr>
		
         <tr>
            <td>Fecha Inicial:</td>
            <td><input type='date' name='descripcion' class='form-control' placeholder='Ingrese una Descripcion' required /></td>
        </tr>  
        <tr>
            <td>Fecha final:</td>
            <td><input type='date' name='descripcion' class='form-control' placeholder='Ingrese una Descripcion' required /></td>
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
     
