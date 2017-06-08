<?php
/* @var $this AfeccioncontrollerController */
/* @var $data Afeccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_afeccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_afeccion), array('view', 'id'=>$data->id_afeccion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>