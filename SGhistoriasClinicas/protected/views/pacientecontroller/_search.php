<?php
/* @var $this PacientecontrollerController */
/* @var $model Paciente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_paciente'); ?>
		<?php echo $form->textField($model,'id_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'edad'); ?>
		<?php echo $form->textField($model,'edad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_doctor'); ?>
		<?php echo $form->textField($model,'id_doctor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nro_historia'); ?>
		<?php echo $form->textField($model,'nro_historia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->