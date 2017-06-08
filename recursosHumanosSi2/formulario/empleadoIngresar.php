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
            <td>Id Contrato</td>
            <td>
                
             <select class="form-control" name="contrato" id="contrato">     
                 <?PHP
               include_once('../entidad/conexion.php');
            
                $db = new Conexion;
                 
				        $db->conectar();
                $query = "CALL mostrar_id_contrato()";
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
            <td>Empleado</td>
            <td>
                
             <select class="form-control" name="postulante" id="empleado">     
                 <?PHP
               
            
                $db = new Conexion;
                 
        $db->conectar();
                $query = "CALL mostrar_postulante()";
                $resultadoEmpresa = $db->consulta($query);
                
                ?>
        <?php 
                 while ($fila=$db->fetch_array($resultadoEmpresa)){
        echo "<option value='".$fila['idPostulante']."'> ".$fila['nombre']."</option>";
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
                $query = "CALL mostrar_asigna()";
                $resultadoEmpresa = $db->consulta($query);
                
                ?>
        <?php 
                 while ($fila=$db->fetch_array($resultadoEmpresa)){
        echo "<option value='".$fila['idAsigna']."'> ".$fila['nombreCargo'].' a '.$fila['nombreDep']."</option>";
                }
                  $db->desconectar();
                ?>
             </select>
   
                    </td>  
        </tr>
		
        <tr>
            <td>Hablilitado</td>
                 
            <td>     <select class="form-control" name="habilitado">
                      <option value="5">---Seleccione una Opción---</option>
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
     
