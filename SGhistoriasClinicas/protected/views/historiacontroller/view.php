<?php
/* @var $this HistoriacontrollerController */
/* @var $model Historia */

$this->breadcrumbs=array(
	'Historias'=>array('index'),
	$model->nro_historia,
);

$this->menu=array(
	array('label'=>'List Historia', 'url'=>array('index')),
	array('label'=>'Create Historia', 'url'=>array('create')),
	array('label'=>'Update Historia', 'url'=>array('update', 'id'=>$model->nro_historia)),
	array('label'=>'Delete Historia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nro_historia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Historia', 'url'=>array('admin')),
);
?>

<h1>View Historia #<?php echo $model->nro_historia; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nro_historia',
		'fecha_creacion',
		'observaciones',
	),
)); ?>
