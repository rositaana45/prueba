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
  
           
            <td>Cargo</td>
            <td>
                
             <select class="form-control" name="cargo" id="cargo">     
                 <?PHP
               include_once('../entidad/conexion.php');
                echo'hola';
                $db = new Conexion;
                 
				$db->conectar();
                $query = "CALL mostrarCargo()";
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
        <td>cantidad</td> 
        <td><input type='number' name='cantidad' class='form-control' placeholder='cantidad' required></td>       
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
     
