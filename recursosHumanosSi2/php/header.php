<!--/.content-->
	<nav class="navbar navbar-inverse navbar-fixed-top paint-area" role="navigation">
    <div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="#">RRHH</a>
	    </div>
	    <!--/.navbar-header-->
	
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav  navbar-right">	


		        <?php
		        if($grupoId!=4){ echo '
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt">&ensp;</span>Reclutamiento<b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-2">
			            <div class="row">
				            <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
						            <li><a href="../formulario/curriculum.php"><span class="glyphicon glyphicon-user">&ensp;</span>Curriculum </a></li>
                                      <li><a href="../formulario/postulante.php"><span class="glyphicon glyphicon-bookmark">&ensp;</span>Postulante</a></li>
                                    <li class="divider"></li>
						            <li><a href="../formulario/convocatoria.php"><span class="glyphicon glyphicon-book">&ensp;</span>Convocatoria</a></li>
						            <li><a href="../formulario/lugartrabajo.php"><span class="glyphicon glyphicon-th-large">&ensp;</span>Lugar Trabajo</a></li>
						            <li><a href="../formulario/vacante.php"><span class="glyphicon glyphicon-bullhorn">&ensp;</span>Vacante</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
						            <li><a href="../formulario/requisitos.php"><span class="glyphicon glyphicon-heart">&ensp;</span>Requisito</a></li>
						            <li class="divider"></li>
						            <li><a href="../formulario/validacion.php"><span class="glyphicon glyphicon-heart-empty">&ensp;</span>Validacion</a></li>
						            <li class="divider"></li>
						            <li><a href="../formulario/seleccion.php"><span class="glyphicon glyphicon-th-list">&ensp;</span>seleccion</a></li>
						            <li class="divider"></li>
						             <li><a href="../formulario/entrevista.php"><span class="glyphicon glyphicon-th-list">&ensp;</span>Entrevista</a></li>
					            </ul>
				            </div>
							
				          
			            </div>
		            </ul>
		        </li>';
		        	}
		        ?>


                <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-retweet">&ensp;</span>Empleado<b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
						           
						            <li><a href="../formulario/permiso.php"><span class="glyphicon glyphicon-user">&ensp;</span>Permiso</a></li>
									    <li class="divider"></li>
									<li><a href="../formulario/memorandum.php"><span class="glyphicon glyphicon-arrow-up">&ensp;</span>Memorandum</a></li>
                                    <li class="divider"></li>
						            <li><a href="../formulario/asistencia.php"><span class="glyphicon glyphicon-tag">&ensp;</span>Asistencia</a></li>
                                    <li class="divider"></li>
						            
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
						            
						            <li><a href="../formulario/horario.php"><span class="glyphicon glyphicon-eye-open">&ensp;</span>Horario</a></li>
                                    <li class="divider"></li>
						              <li><a href="../formulario/empleado.php"><span class="glyphicon glyphicon-education">&ensp;</span>Empleado</a></li>
								    <li class="divider"></li>
									<li><a href="../formulario/turno.php"><span class="glyphicon glyphicon-education">&ensp;</span>Turno</a></li>
                                    <li class="divider"></li>
						            
					            </ul>
				            </div>
							
							 <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
						           <li><a href="../formulario/departamento.php"><span class="glyphicon glyphicon-tags">&ensp;</span>Departamento</a></li>
								   
									 <li><a href="../formulario/capacitacion.php"><span class="glyphicon glyphicon-file">&ensp;</span>Capacitacion </a></li>
                                    <li class="divider"></li>
								 <li><a href="../formulario/cargo.php"><span class="glyphicon glyphicon-folder-close">&ensp;</span>Cargo</a></li>
                                    
									<li><a href="../formulario/asigna.php"><span class="glyphicon glyphicon-folder-close">&ensp;</span>Asigna</a></li>
                                  
									 
					            </ul>
				            </div>
			            </div>
		            </ul>
		        </li>
                <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tasks">&ensp;</span>Admin. de Pers.<b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-2">
			            <div class="row">
				            <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
						            <li><a href="../formulario/periodoPrueba.php"><span class="glyphicon glyphicon-calendar">&ensp;</span>Periodo prueba</a></li>
									<li class="divider"></li>
                                    <li><a href="../formulario/vacaciones.php"><span class="glyphicon glyphicon-time">&ensp;</span>Vacaciones</a></li>
                                    <li class="divider"></li>
						            <li><a href="../formulario/planilla.php"><span class="glyphicon glyphicon-list">&ensp;</span>Planilla</a></li>
						
					            </ul>
				            </div>
				            <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
						            <li><a href="../formulario/contrato.php"><span class="glyphicon glyphicon-tasks">&ensp;</span>contrato</a></li>
						            <li><a href="../formulario/modificacion.php"><span class="glyphicon glyphicon-list">&ensp;</span>modificacion</a></li>
                                    <li class="divider"></li>
						            <li><a href="../formulario/seguroSocial.php"><span class="glyphicon glyphicon-heart">&ensp;</span>seguro social</a></li>
						            <li><a href="../formulario/extincionContrato.php"><span class="glyphicon glyphicon-list">&ensp;</span>extinción contrato</a></li>
					            </ul>
				            </div>
			            </div>
		            </ul>
		        </li>



		        <?php
		        if($grupoId==2){
                echo '<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrativo<b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-2">
			            <div class="row">
				            <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
						            <li><a href="../formulario/grupo.php"><span class="glyphicon glyphicon-folder-close">&ensp;</span>grupo</a></li>
									  <li class="divider"></li>
                                    <li><a href="../formulario/usuario.php"><span class="glyphicon glyphicon-user">&ensp;</span>usuario</a></li>
									  <li class="divider"></li>
									 <li><a href="../formulario/operacion.php"><span class="glyphicon glyphicon-list">&ensp;</span>operacion</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-6">
					            <ul class="multi-column-dropdown">				
								
						            <li><a href="../formulario/bitacora.php"><span class="glyphicon glyphicon-list">&ensp;</span>bitácora</a></li>
									  <li class="divider"></li>
									<li><a href="../formulario/privilegio.php"><span class="glyphicon glyphicon-arrow-up">&ensp;</span>privilegios</a></li>
									<li class="divider"></li>
									<li><a href="../control/respaldar.php"><span class="glyphicon glyphicon-arrow-up">&ensp;</span>backap</a></li>
		

					            </ul>
				            </div>
			            </div>
		            </ul>
		        </li>';
		        	}
		        ?>

		         <?php
		        if($grupoId!=4){ echo '
		        
                <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ingresos<b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-2">
					<div class="row">
			              <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
						            <li><a href="../periodo/periodo.php"><span class="glyphicon glyphicon-arrow-up">&ensp;</span>Escalafon</a></li>
									  <li class="divider"></li>
                                    <li><a href="../vacaciones/vacaciones.php"><span class="glyphicon glyphicon-time">&ensp;</span>Horas Extras</a></li>
									  <li class="divider"></li>
									 <li><a href="../tipo_permiso/tipo_permiso.php"><span class="glyphicon glyphicon-list">&ensp;</span>Bono antigueda</a></li>
					            </ul>
				            </div>
							
							 <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
						            <li><a href="../periodo/periodo.php"><span class="glyphicon glyphicon-folder-close">&ensp;</span>Retribuciones</a></li>
									 <li><a href="../tipo_permiso/tipo_permiso.php"><span class="glyphicon glyphicon-list">&ensp;</span>Tipo retribucion</a></li>
									  <li class="divider"></li>
                                    <li><a href="../vacaciones/vacaciones.php"><span class="glyphicon glyphicon-list">&ensp;</span>Ingresos</a></li>
									<li><a href="../vacaciones/vacaciones.php"><span class="glyphicon glyphicon-list">&ensp;</span>Tipo Ingresos</a></li>
									  
									
					            </ul>
				            </div>
						</div>	
		            </ul>
		        </li>

		        	';
		        	}
		        ?>

		         <?php
		        if($grupoId!=4){ echo '
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Descuentos<b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-2">
					<div class="row">
			              <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
						            <li><a href="../periodo/periodo.php"><span class="glyphicon glyphicon-arrow-up">&ensp;</span>Anticipo</a></li>
									  <li class="divider"></li>
                                    <li><a href="../vacaciones/vacaciones.php"><span class="glyphicon glyphicon-time">&ensp;</span>Afp</a></li>
									  <li class="divider"></li>
									 <li><a href="../tipo_permiso/tipo_permiso.php"><span class="glyphicon glyphicon-list">&ensp;</span>Sanciones</a></li>
					            </ul>
				            </div>
							
							 <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
						            <li><a href="../periodo/periodo.php"><span class="glyphicon glyphicon-folder-close">&ensp;</span>Prestamos</a></li>
									  <li class="divider"></li>
									 <li><a href="../tipo_permiso/tipo_permiso.php"><span class="glyphicon glyphicon-list">&ensp;</span>Descuentos</a></li>
									
                                    <li><a href="../vacaciones/vacaciones.php"><span class="glyphicon glyphicon-list">&ensp;</span>Tipo de Descuento</a></li>
									  
									
					            </ul>
				            </div>
						</div>	
		            </ul>
		        </li>
		        ';
		        	}
		        ?>



            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user">&ensp;</span>&nbsp; Bienvenido</a>
            <ul class="dropdown-menu multi-column columns-2 ">
            <div class="row">
            		   <div class="col-sm-8">
					            <ul class="multi-column-dropdown">
						            <li><a href="#"><span class="glyphicon glyphicon-arrow-up">&ensp;</span> Usuario: <?php echo $usuario;?></a></li>
									  <li class="divider"></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-time">&ensp;</span>Configurar</a></li>
									  <li class="divider"></li>
									 <li><a href="../index.php"><span class="glyphicon glyphicon-list">&ensp;</span>Salir</a></li>
					            </ul>
				          </div>   
            </div>
             </ul>

            </li>

	        </ul>
	    </div>
	    <!--/.navbar-collapse-->
        </div>
	</nav>
	<!--/.navbar-->
<!--/.content-->