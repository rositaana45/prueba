<?php
/* @var $this OdontogramacontrollerController */
/* @var $model Odontograma */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'odontograma-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_odontograma'); ?>
		<?php echo $form->textField($model,'nro_odontograma'); ?>
		<?php echo $form->error($model,'nro_odontograma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_piezaDental'); ?>
		<?php echo $form->textField($model,'nro_piezaDental'); ?>
		<?php echo $form->error($model,'nro_piezaDental'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nrp_caraDental'); ?>
		<?php echo $form->textField($model,'nrp_caraDental'); ?>
		<?php echo $form->error($model,'nrp_caraDental'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_historia'); ?>
		<?php echo $form->textField($model,'nro_historia'); ?>
		<?php echo $form->error($model,'nro_historia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_afeccion'); ?>
		<?php echo $form->textField($model,'id_afeccion'); ?>
		<?php echo $form->error($model,'id_afeccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_seguimiento'); ?>
		<?php echo $form->textField($model,'nro_seguimiento'); ?>
		<?php echo $form->error($model,'nro_seguimiento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->