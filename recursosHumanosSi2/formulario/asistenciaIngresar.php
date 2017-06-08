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
            <td>Fecha</td>
            <td><input type='Date' name='fecha' class='form-control' placeholder='Ingrese Fecha' required /></td>
        </tr>

        <tr>
            <td>Hora</td>
            <td><input type='Time' name='hora' class='form-control' placeholder='Ingrese Hora' required /></td>
        </tr>

         <tr>
            <td>Tipo</td>
            <td>
            		<select class="form-control" name="tipo">
                        <option value="0">ENTRADA</option>
                        <option value="1">SALIDA</option>
              		</select>
              </td>            
        </tr>
 
 
		 <tr>
            <td>Empleado</td>
            <td>
                
             <select class="form-control" name="empleado" id="empleado">     
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
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Guardar este Registro
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
