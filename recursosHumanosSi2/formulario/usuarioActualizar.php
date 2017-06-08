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
$idUsuario=$_REQUEST['edit_id'];

 include_once('../entidad/conexion.php');


            
                $db = new Conexion;
                 
                $db->conectar();
                $query = "CALL mostrar_usuario_id('$idUsuario')";
                $resultadoEmpresa = $db->consulta($query);
               $db->desconectar();
                 while ($fila=$db->fetch_array($resultadoEmpresa)){
                           

                           $nombreUsuario=$fila['nombreUsuario'];  
                           $password=$fila['contrasena'];   
                           $correo =$fila['correo'];
                           $nombre=$fila['nombre'];
                           $estado =$fila['estado'];
                           $idEmpleado =$fila['idEmpleado'];
                           $idGrupo =$fila['idGrupo'];
                           $categoria=$fila['categoria'];

                           
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
 
    <table class='table table-bordered'>
         <tr>
            <td>Nombre de Usuario</td>
            <td><input type='text' name='nickname' value='<?php echo $nombreUsuario;?>' class='form-control' /></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type='password' name='password' value='<?php echo $password;?>' class='form-control' placeholder='Ingrese un password' required /></td>
        </tr>

        <tr>
            <td>correo</td>
            <td><input type='text' name='correo' value='<?php echo $correo;?>' class='form-control' placeholder='Ingrese un correo' required /></td>
        </tr>
 
         <tr>
            <td>Estado</td>
            <td>
                
             <select class="form-control" name="estado" id="convocatoria">     
                 <?php 
                 if($estado==1){
                echo "<option value='".$estado."'> HABILITADO </option>";
                    }else{
                echo "<option value='".$estado."'> DESHABILITADO </option>";
                    }
                ?>
                <option value="1">HABILITADO</option>
                 <option value="0">DESABILITADO</option>

             </select>
           
        </tr>
 
 
		 <tr>
            <td>Empleado</td>
            <td>
                
             <select class="form-control" name="empleado" id="convocatoria">     
                 <?PHP              
            
                $db = new Conexion;
                 
				$db->conectar();
                $query = "CALL mostrar_nombre_empleado()";
                $resultadoEmpresa = $db->consulta($query);
                
                ?>
				<?php 
                echo "<option value='".$idEmpleado."'> ".$nombre."</option>";
                 while ($fila2=$db->fetch_array($resultadoEmpresa)){
				echo "<option value='".$fila2['idEmpleado']."'> ".$fila2['nombre']."</option>";


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
               
            
                $db = new Conexion;
                 
                $db->conectar();
                $query = "CALL mostrar_grupos()";
                $resultadoEmpresa = $db->consulta($query);
                
                ?>
                <?php 
                echo "<option value='".$idGrupo."'> ".$categoria."</option>";
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
     