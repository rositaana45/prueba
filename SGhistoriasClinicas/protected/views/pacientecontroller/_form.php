<?php
/* @var $this PacientecontrollerController */
/* @var $model Paciente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paciente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_paciente'); ?>
		<?php echo $form->textField($model,'id_paciente'); ?>
		<?php echo $form->error($model,'id_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edad'); ?>
		<?php echo $form->textField($model,'edad'); ?>
		<?php echo $form->error($model,'edad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_doctor'); ?>
		<?php echo $form->textField($model,'id_doctor'); ?>
		<?php echo $form->error($model,'id_doctor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_historia'); ?>
		<?php echo $form->textField($model,'nro_historia'); ?>
		<?php echo $form->error($model,'nro_historia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->