
<?php
session_start();
$usuario=$_SESSION['usuario'];
$idIni=$_SESSION['idIni'];
$grupoId=$_SESSION['grupoId'];

$insertar=$_SESSION['insertar'];
$actualizar=$_SESSION['actualizar'];
$vistas=$_SESSION['vistas'];

echo $vistas;
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
            <td><input type='date' name='fecha' class='form-control' placeholder='Ingrese la Fecha Lanzada' required></td>
        </tr>
        
        <tr>
            <td>hora</td>
            <td><input type='time' name='hora' class='form-control' placeholder='Ingrese la hora Lanzada' required></td>
        </tr>
        
                 <tr>
            
             <td>Seleccionados</td>
            <td>
                
             <select class="form-control" name="postulante" id="cargo">     
                 <?PHP
               include_once('../entidad/conexion.php');
                $db = new Conexion;
                 
				$db->conectar();
                $query = "CALL mostrarSeleccionados()";
                $resultadoEmpresa = $db->consulta($query);
                
                ?>
				<?php 
                 while ($fila=$db->fetch_array($resultadoEmpresa)){
				echo "<option value='".$fila['idSeleccion']."'> ".$fila['nombre']."</option>";
                }
                  $db->desconectar();
                ?>
             </select>
   
                    </td>  
        </tr>
        
        
        
       <tr>
            <td>Resultado</td>
            <td>
            		<select class="form-control" name="estado">
                    	<option value="0">---Seleccione una Opción---</option>
                        <option value="aceptado">ACEPTADO</option>
                        <option value="rechazado">RECHAZADO</option>
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