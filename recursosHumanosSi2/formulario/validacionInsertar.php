
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
            <td>Convocatoria</td>
              <td>
                
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
   
                    </td>  
        </tr> 
        
              
        
        
          <tr>
            <td>Postulante</td>
            <td>
            <select class="form-control" name="postulante" id="postulante">     
                 <?PHP
               include_once('../entidad/conexion.php');
            
                $db = new Conexion;
                 
				$db->conectar();
                $query = "CALL postulantes_no_seleccionados()";
                $resultadoEmpresa = $db->consulta($query);
                
                ?>
				<?php 
                 while ($fila=$db->fetch_array($resultadoEmpresa)){
				echo "<option value='".$fila['0']."'> ".$fila['0']."</option>";
                }
                  $db->desconectar();
                ?>
             </select>
                    </td>  
        </tr>    
 


        <tr>
            <td>Estado</td>
            <td>
            		<select class="form-control" name="estado">
                    	<option value="0">---Seleccione una Opción---</option>
                        <option value="1">APROBADO</option>
                        <option value="0">RECHAZADO</option>
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
     
