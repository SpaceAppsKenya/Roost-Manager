<?php
/* @var $this DiseasesController */
/* @var $model Diseases */

$this->breadcrumbs=array(
	'Diseases'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Diseases', 'url'=>array('index')),
	array('label'=>'Create Diseases', 'url'=>array('create')),
	array('label'=>'Update Diseases', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Diseases', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Diseases', 'url'=>array('admin')),
);
?>

<h1>View Diseases #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'category',
		'description',
		'symptons',
		'prevention',
		'treatement',
		'photos',
	),
)); ?>
