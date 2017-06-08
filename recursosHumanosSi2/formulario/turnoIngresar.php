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
            <td>Estado</td>
                 
            <td>     <select class="form-control" name="estado">
                      <option value="5">---Seleccione una Opción---</option>
                        <option value="1">SI</option>
                        <option value="0">NO</option>
                      
                     </select>
            </td>
              </tr>

		 <tr>
            <td>Horario</td>
            <td>
                
             <select class="form-control" name="horario" id="horario">     
                 <?PHP
               include_once('../entidad/conexion.php');
            
                $db = new Conexion;
                 
				$db->conectar();
                $query = "CALL mostrar_id_horario()";
                $resultadoEmpresa = $db->consulta($query);
                
                ?>
				<?php 
                 while ($fila=$db->fetch_array($resultadoEmpresa)){
				echo "<option value='".$fila['idHorario']."'> ".$fila['descripcion']."</option>";
                }
                  $db->desconectar();
                ?>
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
     
