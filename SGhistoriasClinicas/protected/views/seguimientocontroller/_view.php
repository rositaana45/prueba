<?php
/* @var $this SeguimientocontrollerController */
/* @var $data Seguimiento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_seguimiento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nro_seguimiento), array('view', 'id'=>$data->nro_seguimiento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->id_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_doctor')); ?>:</b>
	<?php echo CHtml::encode($data->id_doctor); ?>
	<br />


</div>