<?php
/* @var $this ServiciocontrollerController */
/* @var $data Servicio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_servicio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_servicio), array('view', 'id'=>$data->id_servicio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo')); ?>:</b>
	<?php echo CHtml::encode($data->costo); ?>
	<br />


</div>