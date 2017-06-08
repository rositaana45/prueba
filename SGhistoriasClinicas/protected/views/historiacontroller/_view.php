<?php
/* @var $this HistoriacontrollerController */
/* @var $data Historia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_historia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nro_historia), array('view', 'id'=>$data->nro_historia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />


</div>