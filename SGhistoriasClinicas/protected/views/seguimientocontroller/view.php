<?php
/* @var $this SeguimientocontrollerController */
/* @var $model Seguimiento */

$this->breadcrumbs=array(
	'Seguimientos'=>array('index'),
	$model->nro_seguimiento,
);

$this->menu=array(
	array('label'=>'List Seguimiento', 'url'=>array('index')),
	array('label'=>'Create Seguimiento', 'url'=>array('create')),
	array('label'=>'Update Seguimiento', 'url'=>array('update', 'id'=>$model->nro_seguimiento)),
	array('label'=>'Delete Seguimiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nro_seguimiento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Seguimiento', 'url'=>array('admin')),
);
?>

<h1>View Seguimiento #<?php echo $model->nro_seguimiento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nro_seguimiento',
		'fecha',
		'id_servicio',
		'id_doctor',
	),
)); ?>
