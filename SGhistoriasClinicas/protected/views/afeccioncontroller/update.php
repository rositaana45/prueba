<?php
/* @var $this AfeccioncontrollerController */
/* @var $model Afeccion */

$this->breadcrumbs=array(
	'Afeccions'=>array('index'),
	$model->id_afeccion=>array('view','id'=>$model->id_afeccion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Afeccion', 'url'=>array('index')),
	array('label'=>'Create Afeccion', 'url'=>array('create')),
	array('label'=>'View Afeccion', 'url'=>array('view', 'id'=>$model->id_afeccion)),
	array('label'=>'Manage Afeccion', 'url'=>array('admin')),
);
?>

<h1>Update Afeccion <?php echo $model->id_afeccion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>