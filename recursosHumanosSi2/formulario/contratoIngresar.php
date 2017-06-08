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
            <td>Clausula:</td>
            <td><input type='text' name='clausula' class='form-control' placeholder='Ingrese una Descripcion' required /></td>
        </tr>  
         <tr>
            <td>Fecha:</td>
            <td><input type='date' name='fecha' class='form-control' placeholder='Ingrese una fecha' required /></td>
        </tr>
        <tr>
            <td>Nombre de la Empresa:</td>
            <td><input type='text' name='empresa' class='form-control' placeholder='Nombre de la empresa' required /></td>
        </tr>  
        <tr>
            <td>Salario:</td>
            <td><input type='number' name='salario' class='form-control' placeholder='Ingrese un monto' required /></td>
        </tr>  
         <tr>
            <td>Vigencia del Contrato:</td>
            <td><input type='date' name='vigencia' class='form-control' placeholder='Ingrese fecha de vigencia' required /></td>
        </tr>  
       <tr>
            <td>Tipo:</td>
            <td><input type='text' name='tipo' class='form-control' placeholder='Ingrese un tipo' required /></td>
        </tr>  
         <tr>
            <td>Dias de Vacaciones:</td>
            <td><input type='number' name='vacaciones' class='form-control' placeholder='Ingrese dias de vacacion' required /></td>
        </tr>  
         <tr>
            <td>Numero De Seguro Social</td>
            <td>
                
             <select class="form-control" name="seguro" id="seguro">     
                 <?PHP
               include_once('../entidad/conexion.php');
            
                $db = new Conexion;
                 
				$db->conectar();
                $query = "CALL mostrarSeguro()";
                $resultadoEmpresa = $db->consulta($query);
                
                ?>
				<?php 
                 while ($fila=$db->fetch_array($resultadoEmpresa)){
				echo "<option value='".$fila['idSeguroSocial']."'> ".$fila['idSeguroSocial'].": ".$fila['nombreSeguro']."</option>";
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