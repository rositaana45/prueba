<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>SISTEMA PARA LA GESTION DE HISTORIAS CLINICAS DE UN CONSULTORIO DENTAL</h1>

<img src="../images/Img.png" style="max-width: 910px; max-height: 300px" /> 


<p>INGENIERIA DE SOFTWARE II</p>
	<main class="cd-main-content" style="margin-top: 50px;" id="sr">
		<nav class="cd-side-nav">
			<ul>
				<li class="cd-label">ADMINISTRACION</li>
				<li class="has-children overview">
					
					<ul>
						<li><a href="../doctorcontroller">Doctor</a></li>
						<li><a href="../pacientecontroller">Paciente</a></li>
						<li><a href="../historiacontroller">Historias</a></li>
					</ul>
				</li>
							
			</ul>

			<ul>
				<li class="cd-label">ODONTOGRAMA</li>
				<ul>
						<li><a href="../serviciocontroller">Servico</a></li>
						<li><a href="../afeccioncontroller">Afecciones</a></li>
						<li><a href="../seguimientocontroller">Seguimiento</a></li>
						<li><a href="../odontogramacontroller">Odontograma</a></li>
				</ul>
				

		</nav>
