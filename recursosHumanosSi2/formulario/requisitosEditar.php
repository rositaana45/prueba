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
                $query = "CALL mostrarIdRequisito('$id')";
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
        
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		
       <input type='hidden' name='idRequisito' class='form-control' value='<?php echo $row['idRequisito']; ?>' />
    
              <td>Convocatoria</td>
              <td>      
             <select class="form-control" name="idConvocatoria" id="idConvocatoria">     
                 <?PHP
               $db = new Conexion;
				$db->conectar();
                  $idCon = $row['idConvocatoria'];
                $query2 = "CALL mostrarIdConvocatoria('$idCon')";
                $resultado = $db->consulta($query2);       
                 while ($fila2=$db->fetch_array($resultado)){               
				echo "<option value='".$fila2['0']."'> ".$fila2 ['0']."</option>";     
                }
               $db->desconectar();
                ?> 
             </select>
                    </td>  
        <tr>
            <td>Detalle</td>
            <td><input type='text' name='descripcion' class='form-control' value='<?php echo $row['descripcion']; ?>' required></td>
        </tr>
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Registrar Actualización
			</button>
            </td>
        </tr>

 
    </table>
</form>
     

