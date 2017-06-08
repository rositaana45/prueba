<?php
/* @var $this AfeccioncontrollerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Afeccions',
);

$this->menu=array(
	array('label'=>'Create Afeccion', 'url'=>array('create')),
	array('label'=>'Manage Afeccion', 'url'=>array('admin')),
);
?>

<h1>Afeccions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
