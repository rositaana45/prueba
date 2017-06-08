<?php
/* @var $this AfeccioncontrollerController */
/* @var $model Afeccion */

$this->breadcrumbs=array(
	'Afeccions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Afeccion', 'url'=>array('index')),
	array('label'=>'Manage Afeccion', 'url'=>array('admin')),
);
?>

<h1>Create Afeccion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>