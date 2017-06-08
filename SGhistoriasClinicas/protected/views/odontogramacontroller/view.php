<?php
/* @var $this OdontogramacontrollerController */
/* @var $model Odontograma */

$this->breadcrumbs=array(
	'Odontogramas'=>array('index'),
	$model->nro_odontograma,
);

$this->menu=array(
	array('label'=>'List Odontograma', 'url'=>array('index')),
	array('label'=>'Create Odontograma', 'url'=>array('create')),
	array('label'=>'Update Odontograma', 'url'=>array('update', 'id'=>$model->nro_odontograma)),
	array('label'=>'Delete Odontograma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nro_odontograma),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Odontograma', 'url'=>array('admin')),
);
?>

<h1>View Odontograma #<?php echo $model->nro_odontograma; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nro_odontograma',
		'nro_piezaDental',
		'nrp_caraDental',
		'nro_historia',
		'id_afeccion',
		'nro_seguimiento',
	),
)); ?>
