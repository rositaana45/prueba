<?php
/* @var $this OdontogramacontrollerController */
/* @var $model Odontograma */

$this->breadcrumbs=array(
	'Odontogramas'=>array('index'),
	$model->nro_odontograma=>array('view','id'=>$model->nro_odontograma),
	'Update',
);

$this->menu=array(
	array('label'=>'List Odontograma', 'url'=>array('index')),
	array('label'=>'Create Odontograma', 'url'=>array('create')),
	array('label'=>'View Odontograma', 'url'=>array('view', 'id'=>$model->nro_odontograma)),
	array('label'=>'Manage Odontograma', 'url'=>array('admin')),
);
?>

<h1>Update Odontograma <?php echo $model->nro_odontograma; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>