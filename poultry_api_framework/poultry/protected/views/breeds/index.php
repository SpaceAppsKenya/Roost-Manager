<?php
/* @var $this BreedsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Breeds',
);

$this->menu=array(
	array('label'=>'Create Breeds', 'url'=>array('create')),
	array('label'=>'Manage Breeds', 'url'=>array('admin')),
);
?>

<h1>Breeds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
