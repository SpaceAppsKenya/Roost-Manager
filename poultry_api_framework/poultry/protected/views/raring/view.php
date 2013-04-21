<?php
/* @var $this RaringController */
/* @var $model Raring */

$this->breadcrumbs=array(
	'Rarings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Raring', 'url'=>array('index')),
	array('label'=>'Create Raring', 'url'=>array('create')),
	array('label'=>'Update Raring', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Raring', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Raring', 'url'=>array('admin')),
);
?>

<h1>View Raring #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'stage',
		'description',
	),
)); ?>
