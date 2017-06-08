<?php
/* @var $this SeguimientocontrollerController */
/* @var $model Seguimiento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nro_seguimiento'); ?>
		<?php echo $form->textField($model,'nro_seguimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_servicio'); ?>
		<?php echo $form->textField($model,'id_servicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_doctor'); ?>
		<?php echo $form->textField($model,'id_doctor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->