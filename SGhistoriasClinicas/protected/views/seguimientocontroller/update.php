<?php
/* @var $this SeguimientocontrollerController */
/* @var $model Seguimiento */

$this->breadcrumbs=array(
	'Seguimientos'=>array('index'),
	$model->nro_seguimiento=>array('view','id'=>$model->nro_seguimiento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Seguimiento', 'url'=>array('index')),
	array('label'=>'Create Seguimiento', 'url'=>array('create')),
	array('label'=>'View Seguimiento', 'url'=>array('view', 'id'=>$model->nro_seguimiento)),
	array('label'=>'Manage Seguimiento', 'url'=>array('admin')),
);
?>

<h1>Update Seguimiento <?php echo $model->nro_seguimiento; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>