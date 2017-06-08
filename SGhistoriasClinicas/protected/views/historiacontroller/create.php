<?php
/* @var $this HistoriacontrollerController */
/* @var $model Historia */

$this->breadcrumbs=array(
	'Historias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Historia', 'url'=>array('index')),
	array('label'=>'Manage Historia', 'url'=>array('admin')),
);
?>

<h1>Create Historia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>