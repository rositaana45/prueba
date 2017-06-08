<?php
/* @var $this DoctorcontrollerController */
/* @var $model Doctor */

$this->breadcrumbs=array(
	'Doctors'=>array('index'),
	$model->id_doctor,
);

$this->menu=array(
	array('label'=>'List Doctor', 'url'=>array('index')),
	array('label'=>'Create Doctor', 'url'=>array('create')),
	array('label'=>'Update Doctor', 'url'=>array('update', 'id'=>$model->id_doctor)),
	array('label'=>'Delete Doctor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_doctor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Doctor', 'url'=>array('admin')),
);
?>

<h1>View Doctor #<?php echo $model->id_doctor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
		'id_doctor',
		'direccion',
		'telefono',
		'nit',
		'sexo',
	),
)); ?>
