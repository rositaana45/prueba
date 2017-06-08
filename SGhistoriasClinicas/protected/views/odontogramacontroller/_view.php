<?php
/* @var $this OdontogramacontrollerController */
/* @var $data Odontograma */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_odontograma')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nro_odontograma), array('view', 'id'=>$data->nro_odontograma)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_piezaDental')); ?>:</b>
	<?php echo CHtml::encode($data->nro_piezaDental); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nrp_caraDental')); ?>:</b>
	<?php echo CHtml::encode($data->nrp_caraDental); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_historia')); ?>:</b>
	<?php echo CHtml::encode($data->nro_historia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_afeccion')); ?>:</b>
	<?php echo CHtml::encode($data->id_afeccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_seguimiento')); ?>:</b>
	<?php echo CHtml::encode($data->nro_seguimiento); ?>
	<br />


</div>