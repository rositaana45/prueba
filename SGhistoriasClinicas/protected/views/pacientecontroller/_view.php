<?php
/* @var $this PacientecontrollerController */
/* @var $data Paciente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_paciente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_paciente), array('view', 'id'=>$data->id_paciente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edad')); ?>:</b>
	<?php echo CHtml::encode($data->edad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_doctor')); ?>:</b>
	<?php echo CHtml::encode($data->id_doctor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_historia')); ?>:</b>
	<?php echo CHtml::encode($data->nro_historia); ?>
	<br />


</div>