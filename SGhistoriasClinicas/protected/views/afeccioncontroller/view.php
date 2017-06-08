<?php
/* @var $this AfeccioncontrollerController */
/* @var $model Afeccion */

$this->breadcrumbs=array(
	'Afeccions'=>array('index'),
	$model->id_afeccion,
);

$this->menu=array(
	array('label'=>'List Afeccion', 'url'=>array('index')),
	array('label'=>'Create Afeccion', 'url'=>array('create')),
	array('label'=>'Update Afeccion', 'url'=>array('update', 'id'=>$model->id_afeccion)),
	array('label'=>'Delete Afeccion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_afeccion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Afeccion', 'url'=>array('admin')),
);
?>

<h1>View Afeccion #<?php echo $model->id_afeccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_afeccion',
		'descripcion',
	),
)); ?>
