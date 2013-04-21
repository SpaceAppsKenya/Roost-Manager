<?php
/* @var $this BreedsController */
/* @var $model Breeds */

$this->breadcrumbs=array(
	'Breeds'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Breeds', 'url'=>array('index')),
	array('label'=>'Create Breeds', 'url'=>array('create')),
	array('label'=>'Update Breeds', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Breeds', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Breeds', 'url'=>array('admin')),
);
?>

<h1>View Breeds #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'characteristics',
		'environmental_factors',
		'tolerance',
		'quality',
		'period',
	),
)); ?>
