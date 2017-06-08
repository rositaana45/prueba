<?php
/* @var $this DoctorcontrollerController */
/* @var $model Doctor */

$this->breadcrumbs=array(
	'Doctors'=>array('index'),
	$model->id_doctor=>array('view','id'=>$model->id_doctor),
	'Update',
);

$this->menu=array(
	array('label'=>'List Doctor', 'url'=>array('index')),
	array('label'=>'Create Doctor', 'url'=>array('create')),
	array('label'=>'View Doctor', 'url'=>array('view', 'id'=>$model->id_doctor)),
	array('label'=>'Manage Doctor', 'url'=>array('admin')),
);
?>

<h1>Update Doctor <?php echo $model->id_doctor; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>