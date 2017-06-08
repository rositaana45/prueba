<?php
/* @var $this SeguimientocontrollerController */
/* @var $model Seguimiento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seguimiento-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_seguimiento'); ?>
		<?php echo $form->textField($model,'nro_seguimiento'); ?>
		<?php echo $form->error($model,'nro_seguimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_servicio'); ?>
		<?php echo $form->textField($model,'id_servicio'); ?>
		<?php echo $form->error($model,'id_servicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_doctor'); ?>
		<?php echo $form->textField($model,'id_doctor'); ?>
		<?php echo $form->error($model,'id_doctor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->