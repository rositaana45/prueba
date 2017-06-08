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
                $query = "CALL mostrar_id_convocatoria('$id')";
                $fila = $db->consulta($query); 
                $row=$db->fetch_array($fila);
                $db->desconectar();
    
    $id = $row['fechaHora'];
    $dim = strlen($id);
    $cont =0;
    while($cont < $dim){
        
        if($id[$cont]==' '){
            $hora = substr($id,$cont+1);
            $fecha = substr($id,0,$cont);
        }
        $cont++;
    }

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
 
     <input type='hidden' name='id' class='form-control' value='<?php echo $row['idConvocatoria']; ?>' required>
        <table class='table table-bordered'>
        <tr>
            <td>Cargo</td>
           <td>      
             <select class="form-control" name="Cargo" id="Cargo">     
                 <?PHP
               $db = new Conexion;
				$db->conectar();
                  $idCon = $row['cargo'];
                $query2 = "CALL mostrar_Nombre_Cargo2('$idCon')";
                $resultado = $db->consulta($query2);       
                 while ($fila2=$db->fetch_array($resultado)){               
				echo "<option value='".$fila2['nombre']."'> ".$fila2 ['nombre']."</option>";     
                }
               $db->desconectar();
                ?> 
             </select>
                    </td>  
        </tr>		   
        <tr>
            <td>Fecha</td>
            <td><input type='date' name='fecha' class='form-control' value='<?php echo $fecha ?>' required></td>
        </tr>
        
        <tr>
            <td>hora</td>
            <td><input type='time' name='hora' class='form-control' value='<?php echo $hora ?>' required></td>
        </tr>
		<tr>
            <td>Salario</td>
            <td><input type='number' name='salario' class='form-control' value='<?php echo $row['salario']; ?>' required></td>
        </tr>
		<tr>
            <td>Tipo</td>
             <td>     <select class="form-control" name="tipo">
                        <option value="<?php echo $row['tipo']; ?>"><?php echo $row['tipo']; ?></option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      
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