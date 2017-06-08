<?php
/* @var $this HistoriacontrollerController */
/* @var $model Historia */

$this->breadcrumbs=array(
	'Historias'=>array('index'),
	$model->nro_historia=>array('view','id'=>$model->nro_historia),
	'Update',
);

$this->menu=array(
	array('label'=>'List Historia', 'url'=>array('index')),
	array('label'=>'Create Historia', 'url'=>array('create')),
	array('label'=>'View Historia', 'url'=>array('view', 'id'=>$model->nro_historia)),
	array('label'=>'Manage Historia', 'url'=>array('admin')),
);
?>

<h1>Update Historia <?php echo $model->nro_historia; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>