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
                $query = "CALL mostrar_id_empleado('$id')";
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
 
     <input type='hidden' name='id' class='form-control' value='<?php echo $row['idEmpleado']; ?>' required>
        <table class='table table-bordered'>
		      <tr>
            <td>Id Contrato</td>
            <td>
                
             <select class="form-control" name="contrato" id="contrato">     
                 <?PHP
               include_once('../entidad/conexion.php');
            
                $db = new Conexion; 
				$db->conectar();
                 $idC = $row['idContrato'];
                 echo $idContrato;
                $query = "CALL mostrar_idOrden_contrato('$idC')";
                $resultadoEmpresa = $db->consulta($query);
                
                ?>
				<?php 
                 while ($fila=$db->fetch_array($resultadoEmpresa)){
				echo "<option value='".$fila['idContrato']."'> ".$fila['0']."</option>";
                }
                  $db->desconectar();
                ?>
             </select>
   
                    </td>  
              </tr>
        
         <tr>
            <td>Empleado</td>
            <td>
                
             <select class="form-control" name="postulante" id="postulante">     
                 <?PHP
                $db = new Conexion;   
               $db->conectar();
                 $idP = $row['idPostulante'];
                $query = "CALL mostrar_nombre_postulante('$idP')";
                $resultadoEmpresa = $db->consulta($query);  
                ?>
                <?php 
                 while ($fila2=$db->fetch_array($resultadoEmpresa)){
                 echo "<option value='".$fila2['idPostulante']."'> ".$fila2['nombre']."</option>";
                }
                  $db->desconectar();
                ?>
             </select>
   
                    </td>  
        </tr>
          <tr>
            <td>Asigna a:</td>
            <td>
                
             <select class="form-control" name="asigna" id="asigna">     
                 <?PHP
                $db = new Conexion;        
                $db->conectar();
                 $idA = $row['idAsigna'];
                $query = "CALL mostrar_idOrden_asigna('$idA')";
                $resultadoEmpresa = $db->consulta($query);
                
                ?>
                <?php 
                 while ($fila3=$db->fetch_array($resultadoEmpresa)){
                 echo "<option value='".$fila3['idAsigna']."'> ".$fila3['nombreCargo'].' a '.$fila3['nombreDep']."</option>";
                }
                  $db->desconectar();
                ?>
             </select>
                    </td>  
        </tr>

         <tr>
            <td>Hablilitado</td>
                 
            <td>     <select class="form-control" name="habilitado">
                     
                        <option value="1">SI</option>
                        <option value="0">NO</option>
                      
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