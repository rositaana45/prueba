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
            <td>Nombre de Usuario</td>
            <td><input type='text' name='nickname' class='form-control' placeholder='Ingrese un usuario' required /></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type='password' name='password' class='form-control' placeholder='Ingrese un password' required /></td>
        </tr>

        <tr>
            <td>correo</td>
            <td><input type='text' name='correo' class='form-control' placeholder='Ingrese un correo' required /></td>
        </tr>
 
         <tr>
            <td>Estado</td>


        <td>
                     <select class="form-control" name="estado" id="cargo">     
                     echo "<option value=""> --- Ingrese un Valor --- </option>";
                     echo "<option value="0"> Deshabilitado </option>";
                     echo "<option value="1"> Habilitado </option>";
                
                    </select>


            </td>
        </tr>
 
 
		 <tr>
            <td>Empleado</td>
            <td>
                
             <select class="form-control" name="empleado" id="convocatoria">     
                 <?PHP
               include_once('../entidad/conexion.php');
            
                $db = new Conexion;
                 
				$db->conectar();
                $query = "CALL mostrar_nombre_empleado()";
                $resultadoEmpresa = $db->consulta($query);
                
                ?>
				<?php 
                 while ($fila=$db->fetch_array($resultadoEmpresa)){
				echo "<option value='".$fila['idEmpleado']."'> ".$fila['nombre']."</option>";


                }
                  $db->desconectar();
                ?>
             </select>
   
                    </td>  
        </tr>

         <tr>
            <td>idGrupo</td>
            <td>
                
             <select class="form-control" name="grupo" id="convocatoria">     
                 <?PHP
               include_once('../entidad/conexion.php');
            
                $db = new Conexion;
                 
                $db->conectar();
                $query = "CALL mostrar_grupos()";
                $resultadoEmpresa = $db->consulta($query);
                
                ?>
                <?php 
                 while ($fila=$db->fetch_array($resultadoEmpresa)){
                echo "<option value='".$fila['idGrupo']."'> ".$fila['categoria']."</option>";


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
     
