<?php
/* @var $this OdontogramacontrollerController */
/* @var $model Odontograma */

$this->breadcrumbs=array(
	'Odontogramas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Odontograma', 'url'=>array('index')),
	array('label'=>'Manage Odontograma', 'url'=>array('admin')),
);
?>

<h1>Create Odontograma</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>