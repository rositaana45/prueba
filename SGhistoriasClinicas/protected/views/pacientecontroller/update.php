<?php
/* @var $this PacientecontrollerController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->id_paciente=>array('view','id'=>$model->id_paciente),
	'Update',
);

$this->menu=array(
	array('label'=>'List Paciente', 'url'=>array('index')),
	array('label'=>'Create Paciente', 'url'=>array('create')),
	array('label'=>'View Paciente', 'url'=>array('view', 'id'=>$model->id_paciente)),
	array('label'=>'Manage Paciente', 'url'=>array('admin')),
);
?>

<h1>Update Paciente <?php echo $model->id_paciente; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>