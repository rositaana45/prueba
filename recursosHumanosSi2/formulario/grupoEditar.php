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
                $query = "CALL mostrar_grupo('$id')";
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
    <!-- mensaje de alerta -->
</div>
<form method='post' id='emp-UpdateForm' action="#">
 <input type='hidden' name='id' class='form-control' value='<?php echo $row['idGrupo']; ?>' required>
    <table class='table table-bordered'>
         <tr>
            <td>Categoria</td>
            <td><input type='text' name='descripcion' class='form-control'  value='<?php echo $row['categoria']; ?>' required /></td>
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