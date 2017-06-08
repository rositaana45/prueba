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
  include_once('../entidad/conexion.php');
$id=$_REQUEST['id'];

  $db = new Conexion;
                 
				$db->conectar();
                $query = "CALL mostrar_id_curri_aca('$id')";
                $resultadoEmpresa = $db->consulta($query);
				

		 while ($fila=$db->fetch_array($resultadoEmpresa)){
					$desc=$fila['descripcion'];		
					$idCu=$fila['idCurriculum'];						
		 }
		 $db->desconectar();

?>
<style type="text/css">
#dis{
	display:none;
}
</style>

<div id="dis">
    <!-- mensaje de alerta -->
</div>
<form method='post' name=<?php echo $idCu;?> id='emp-UpdateForm' action="#">

    <table class='table table-bordered'>
		
		 <?PHP
              
			?>
			<tr>
			<td>ID Academico</td>

			
			
			<td><select class="form-control" name="idaca" id="cargo">   
			 <option value=<?php echo $id; ?>><?php echo $id; ?></option>
			   <?PHP
               /*$db = new Conexion;
                 
				$db->conectar();
                $query2 = "CALL mostrar_idacademico()";
                $resultadoEmpresa2 = $db->consulta($query2);
            
		   while ($fila=$db->fetch_array($resultadoEmpresa2)){
				echo "<option value='".$fila['idAcademico']."'> ".$fila['idAcademico']."</option>";
                }
                  $db->desconectar();
			 */?>
               
             </select> </td>
			 </tr>
			 
			 
			<tr>
			<td>ID Curriculum</td>

			<td><select class="form-control" name="idCu" id="cargo">     
               
			 <option value=<?php echo $idCu; ?>><?php echo $idCu; ?></option>
               
			    <?PHP
               $db = new Conexion;
                 
				$db->conectar();
                $query2 = "CALL mostrar_idcurri()";
                $resultadoEmpresa2 = $db->consulta($query2);
            
		   while ($fila=$db->fetch_array($resultadoEmpresa2)){
				echo "<option value='".$fila['idCurriculum']."'> ".$fila['idCurriculum']."</option>";
                }
                  $db->desconectar();
			 ?>
			   
             </select></td>
 
		</tr>
        <tr>
            <td>Descripcion</td>
            <td><input type='text' value="<?php echo $desc;?>" name='descripcion' class='form-control' placeholder='Ingrese una Descripcion' required /></td>
        </tr>

		
		
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Actualizar Registro
			</button>  
            </td>
        </tr>

    </table>
</form>
     
