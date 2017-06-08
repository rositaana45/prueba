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
            <td colspan="2" align="center">DATOS POSTULANTE</td>
        </tr>  
        <tr>
            <td>C.I.</td>
            <td><input type='text' name='ci' class='form-control' placeholder='Ingrese C I' required></td>
        </tr>
		<tr>
            <td>Fecha de Nacimiento</td>
            <td><input type='month' name='fecha' class='form-control' placeholder='Ingrese Fecha' required></td>
        </tr>
		<tr>
            <td>Nombre</td>
            <td><input type='text' name='nombre' class='form-control' placeholder='Ingrese Nombre y Apellido' required></td>
        </tr>
		 <tr>
         <td>Sexo:</td>
         <td>
        <select class="form-control" name="convocatoria" id="convocatoria">     
               
                <option value="M">MASCULINO </option>;
                 <option value="F">FEMENINO </option>;
                
             </select>
             </td>
     </tr>  
		<tr>
            <td>Telefono</td>
            <td><input type='text' name='telefono' class='form-control' placeholder='Ingrese Telefono' required></td>
        </tr>
 
        <tr>
            <td colspan="2" align="center">DATOS PERSONALES</td>
        </tr>  

        <tr>
            <td>BachillerHumanidades</td>
            <td><input type='text' name='bachiller' class='form-control' placeholder='bachiller' required></td>
        </tr>
       <!-- <tr>
            <td></td>
            <td>     <select class="form-control" name="estado">
                    	<option>---Seleccione una Opción---</option>
                        <option value="SOLTERO">SOLTERO</option>
                        <option value="CASADO">CASADO</option>
                        <option value="VIUDO">VIUDO</option>
                        <option value="DIVORSIADO">DIVORSIADO</option>
                     </select>
            </td>
        </tr>-->
        <tr>
            <td>Domicilio</td>
            <td><input type='text' name='domicilio' class='form-control' placeholder='Ingrese su Lugar Naciemiento' required></td>
        </tr>
       <!-- <tr>
            <td>Nacionalidad</td>
            <td><input type='text' name='nacionalidad' class='form-control' placeholder='Ingrese su Nacionalidad' required></td>
        </tr>
        <tr>
            <td>Telefono | Celular</td>
            <td><input type='text' name='telefono' class='form-control' placeholder='Ingrese su Telefono o Celular' required></td>
        </tr>-->
        <tr>
            <td>Email</td>
            <td><input type='email' name='email' class='form-control' placeholder='Ingrese Email' required></td>
        </tr>
     <!--   <tr>
            <td>IdiomaNativo</td>
            <td><input type='text' name='domicilio' class='form-control' placeholder='Ingrese su Domicilio' required></td>
        </tr>-->
         <tr>
            <td>Idioma Nativo</td>
            <td>     <select class="form-control" name="nativo">
                    	<option value="0">---Seleccione una Opción---</option>
                        <option value="AYMARA">AYMARA</option>
                        <option value="QUECHUA">QUECHUA</option>
                        <option value="GUARANI">GUARANI</option>
                        <option value="NO HABLO">NO HABLO</option>
                        <option value="OTROS">OTROS</option>
                     </select>
            </td>
        </tr>
		
		<tr>
            <td>Idioma Extranjero</td>
            <td>     <select class="form-control" name="extranjero">
                    	<option value="0">---Seleccione una Opción---</option>
                        <option value="ingles">Ingles</option>
                        <option value="Japones">Japones</option>
                        <option value="Portugues">Portugues</option>
						 <option value="Aleman">Aleman</option>
                        <option value="NO HABLO">NO HABLO</option>
                        <option value="OTROS">OTROS</option>
                     </select>
            </td>
        </tr>
        <!--<tr>
            <td>IdiomaExtrangero</td>
            <td><input type='text' name='superior' class='form-control' placeholder='Ingrese Educacion Superior' required></td>
        </tr>-->
        <tr>
            <td>LugarNacimiento</td>
            <td><input type='text' name='lugarNaci' class='form-control' placeholder='Ingrese lugar' required></td>
        </tr>
        <tr>
            <td>Nacionalidad</td>
            <td><input type='text' name='Nacionalidad' class='form-control' placeholder='Ingrese Nacionalidad' required></td>
        </tr>
		
		<tr>
            <td colspan="2" align="center">AREA ACADEMICA</td>
        </tr>
		
        <tr>
            <td>Descripcion</td>
            <td><input type='text' name='Academico' class='form-control' placeholder='Ingrese un Dato' required></td>
        </tr>
		<!--
        <tr>
            <td>Educación Escolar</td>
            <td><input type='text' name='escolar' class='form-control' placeholder='Ingrese Educacion Escolar' required></td>
        </tr>
        <tr>
            <td>Bachiller Humanidades</td>
            <td>     <select class="form-control" name="bachiller">
                    	<option>---Seleccione una Opción---</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                     </select>
            </td>            
        </tr>-->
        <tr>
        	<td colspan="2" align="center">AREA LABORAL</td>
        </tr>
        <tr>
            <td>Lugar de Trabajo</td>
            <td><input type='text' name='lugarTrabajo' class='form-control' placeholder='Ingrese lugar trabajo' required></td>
        </tr>
        <tr>
            <td>Tiempo Trabajado</td>
            <td><input type='text' name='tiempo' class='form-control' placeholder='ingrese un dato' required></td>
        </tr>
        <tr>
            <td>Cargo</td>
            <td><input type='text' name='cargo' class='form-control' placeholder='Ingrese un Cargo' required></td>
        </tr>
       
        <tr>
            <td>Motivo Extincion de Contrato</td>
            <td><input type='text' name='extincion' class='form-control' placeholder='Ingrese un motivo' required></td>
        </tr>
      <!--  <tr>
            <td>Capacitacion Técnica</td>
            <td><input type='text' name='ctecnica' class='form-control' placeholder='Ingrese Capacitación Técnica' required></td>
        </tr>
        <tr>
            <td>Capacitacion Laboral</td>
            <td><input type='text' name='claboral' class='form-control' placeholder='Ingrese Capacitación Laboral' required></td>
        </tr>
        <tr>
        	<td colspan="2" align="center">DESTREZAS ADICIONALES | ACTIVIDADES</td>
        </tr>
       
        <tr>
            <td>Idioma Extranjero</td>
            <td>     <select class="form-control" name="extranjero">
                    	<option>---Seleccione una Opción---</option>
                        <option value="INGLES">INGLES</option>
                        <option value="FRANCES">FRANCES</option>
                        <option value="ITALANO">ITALIANO</option>
                        <option value="PORTUGUES">PORTUGUES</option>
                        <option value="CHINO MANDARIN">CHINO MANDARIN</option>
                        <option value="ARABE">ARABE</option>
                        <option value="NO HABLO">NO HABLO</option>
                        <option value="OTRO">OTROS</option>
                     </select>
            </td>
        </tr>
         <tr>
            <td>Idioma Latino</td>
            <td>     <select class="form-control" name="latino">
                    	<option>---Seleccione una Opción---</option>
                        <option value="ESPAÑOL">ESTAÑOL</option>
                        <option value="LATINO">LATINO</option>
                        <option value="CASTELLANO">CASTELLANO</option>
                        <option value="NO HABLO">NO HABLO</option>
                        <option value="OTRO">OTROS</option>
                     </select>
            </td>
        </tr>
        <tr>
            <td>Capacidades Tecnologicas</td>
            <td><input type='text' name='tecno' class='form-control' placeholder='Ingrese Capacidades Tecnologicas' required></td>
        </tr>
        <tr>
            <td>Hobbies | actividades | intereses</td>
            <td><input type='text' name='hobbie' class='form-control' placeholder='Ingrese Hobbies | actividades | intereses' required></td>
        </tr>
        <tr>
            <td>Actividad Física</td>
            <td><input type='text' name='fisica' class='form-control' placeholder='Ingrese actividades | intereses' required></td>
        </tr>
        <tr>
        	<td colspan="2" align="center">MOTIVO DE SALIDA DE SU TRABAJO</td>
        </tr>
        <tr>
            <td>Ultimo Trabajo</td>
            <td><input type='text' name='trabajo' class='form-control' placeholder='Ingrese Ultimo Trabajo' required></td>
        </tr>
        <tr>
            <td>Motivo de Salida</td>
            <td><input type='text' name='salida' class='form-control' placeholder='Ingrese actividades | intereses' required></td>
        </tr>
        <tr>
            <td>Referencia Personal</td>
            <td><input type='text' name='rpersonal' class='form-control' placeholder='Ingrese Referencia Personal' required></td>
        </tr>
        <tr>
            <td>Telefono de Referencia</td>
            <td><input type='text' name='referencia' class='form-control' placeholder='Ingrese Telefono Referencia' required maxlength="8"></td>
        </tr>-->
        
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Guardar este Registro
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
