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
require_once ('../entidad/conexion.php');

if($_REQUEST['edit_id'])
{
	            $id = $_REQUEST['edit_id'];	  
                $db = new Conexion;
				$db->conectar();
                $query = "CALL mostrar_idOrden_asistencia('$id')";
                $fila = $db->consulta($query); 
                $row=$db->fetch_array($fila);
                $db->desconectar();
    
}	
?>

<style type="text/css">
#dis{
	display:none;
}
</style>

    
    <div id="dis">
    
	</div>
        
 	
	<form method='post' id='emp-UpdateForm' action="#">
 
     <input type='hidden' name='id' class='form-control' value='<?php echo $row['idAsistencia']; ?>' required>
       
        <table class='table table-bordered'>
     
     
		 <tr>
            <td>Fecha</td>
            <td><input type='Date' name='fecha' class='form-control' value='<?php echo $row['fecha']; ?>' required /></td>
        </tr>
        
         <tr>
            <td>Hora</td>
            <td><input type='Time' name='hora' class='form-control' value='<?php echo $row['hora']; ?>' required /></td>
        </tr>
        
           <tr>
            <td>Tipo</td>
            <td>
            		<select class="form-control" name="tipo">
                        <option value="E">ENTRADA</option>
                        <option value="S">SALIDA</option>
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
                $idE = $row['idEmpleado'];
                $query = "CALL mostrar_idOrden_empleado('$idE')";
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