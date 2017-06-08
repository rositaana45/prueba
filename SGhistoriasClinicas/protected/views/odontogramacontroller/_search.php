<?php
/* @var $this OdontogramacontrollerController */
/* @var $model Odontograma */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nro_odontograma'); ?>
		<?php echo $form->textField($model,'nro_odontograma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nro_piezaDental'); ?>
		<?php echo $form->textField($model,'nro_piezaDental'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nrp_caraDental'); ?>
		<?php echo $form->textField($model,'nrp_caraDental'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nro_historia'); ?>
		<?php echo $form->textField($model,'nro_historia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_afeccion'); ?>
		<?php echo $form->textField($model,'id_afeccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nro_seguimiento'); ?>
		<?php echo $form->textField($model,'nro_seguimiento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->