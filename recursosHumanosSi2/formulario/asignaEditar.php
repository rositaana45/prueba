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
                $query = "CALL mostrar_asigna_id('$id')";
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
 
     <input type='hidden' name='id' class='form-control' value='<?php echo $row['idAsigna']; ?>' required>
        <table class='table table-bordered'>
	<tr>
            <td>Cargo</td>
            <td>
                
             <select class="form-control" name="cargo" id="cargo">     
                 <?PHP
               include_once('../entidad/conexion.php');
            
                $db = new Conexion;
                 $idC = $row['idCargo'];
				$db->conectar();
                $query = "CALL mostrar_nombre_Cargo('$idC')";
                $resultadoEmpresa = $db->consulta($query);
                
                ?>
				<?php 
                 while ($fila=$db->fetch_array($resultadoEmpresa)){
				echo "<option value='".$fila['idCargo']."'> ".$fila['nombre']."</option>";
                }
                  $db->desconectar();
                ?>
             </select>
   
                    </td>  
        </tr>	   
		
              <tr>
            <td>Departamento</td>
            <td>
                
             <select class="form-control" name="departamento" id="departamento">     
                 <?PHP
               include_once('../entidad/conexion.php');
            
                $db = new Conexion;
                 $idD = $row['idDepartamento'];
                $db->conectar();
                $query = "CALL mostrar_nombre_departamento('$idD')";
                $resultadoEmpresa = $db->consulta($query);
                
                ?>
        <?php 
                 while ($fila=$db->fetch_array($resultadoEmpresa)){
        echo "<option value='".$fila['idDepartamento']."'> ".$fila['nombre']."</option>";
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