<?php
include_once('../entidad/conexion.php');  
session_start();
$usuario=$_SESSION['usuario'];
$idIni=$_SESSION['idIni'];
$grupoId=$_SESSION['grupoId'];
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
            <td>Fecha Inicial:</td>
            <td><input type='date' name='fechaInicio' class='form-control' placeholder='Ingrese una Descripcion' required /></td>
        </tr>  
        <tr>
            <td>Fecha final:</td>
            <td><input type='date' name='fechaFinal' class='form-control' placeholder='Ingrese una Descripcion' required /></td>
        </tr>
         <tr>
            <td>Numero De Entrevista</td>
            <td> 
             <select class="form-control" name="entrevista" id="entrevista">     
                 <?PHP          
               $db = new Conexion;
               $db->conectar();
                $query = "CALL mostrarEntrevista()";
                $resultado = $db->consulta($query);
                ?>
                <?php   
                 while ($fila=$db->fetch_array($resultado)){
                echo "<option value='".$fila['idEntrevista']."'> ".$fila['idEntrevista']."</option>";
                }
                  $db->desconectar();
                ?>
             </select>
             </td>  
        </tr>
        
          <tr>
            <td>Numero De Contrato</td>
            <td> 
             <select class="form-control" name="contrato" id="contrato">     
                 <?PHP
               $db = new Conexion;
               $db->conectar();
                $query = "CALL mostrarContrato()";
                $resultado = $db->consulta($query);   
                 while ($fila=$db->fetch_array($resultado)){
                echo "<option value='".$fila['idContrato']."'> ".$fila['idContrato']."</option>";
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
     
