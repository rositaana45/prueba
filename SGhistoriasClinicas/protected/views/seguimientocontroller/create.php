<?php
/* @var $this SeguimientocontrollerController */
/* @var $model Seguimiento */

$this->breadcrumbs=array(
	'Seguimientos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Seguimiento', 'url'=>array('index')),
	array('label'=>'Manage Seguimiento', 'url'=>array('admin')),
);
?>

<h1>Create Seguimiento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>