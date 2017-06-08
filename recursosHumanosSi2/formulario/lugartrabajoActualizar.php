<?php
session_start();
$usuario=$_SESSION['usuario'];
$idIni=$_SESSION['idIni'];
$grupoId=$_SESSION['grupoId'];

$idLugar=$_REQUEST['edit_id'];
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
<form method='post' id='emp-UpdateForm' action="#">
 
    <table class='table table-bordered'>
 
		 <tr>
            <td>Convocatoria</td>
            <td>
                
            <?PHP
               include_once('../entidad/conexion.php');

               $db = new Conexion;
                 
                 $db->conectar();
                $query = "CALL mostrar_id_lugarTrabajo('$idLugar')";
                $resultadoEmpresa = $db->consulta($query);
                
              while ($fila=$db->fetch_array($resultadoEmpresa)){
        $idConv=$fila['idConvocatoria'];
        $desc=$fila['descripcion'];
                }
                  $db->desconectar();

                ?>

             <select class="form-control" name="idConv" id="convocatoria">  

       
                 <?PHP
        
               $db = new Conexion;
                 
				         $db->conectar();
                $query = "CALL mostrarConvocatoria()";
                $resultadoEmpresa = $db->consulta($query);
              echo "<option value='".$idConv."'> ".$idConv."</option>";  
              while ($fila=$db->fetch_array($resultadoEmpresa)){
				echo "<option value='".$fila['0']."'> ".$fila['0']."</option>";
                }
                  $db->desconectar();
                ?>
             </select>
   
                    </td>  
        </tr>
		
        <tr>
            <td>Lugar de trabajo</td>
            <td><input type='text' name='descripcion' value='<?php echo $desc;?>' class='form-control' placeholder='Ingrese una Descripcion' required /></td>
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