<?php
/* @var $this DiseaseReportController */
/* @var $model DiseaseReport */

$this->breadcrumbs=array(
	'Disease Reports'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DiseaseReport', 'url'=>array('index')),
	array('label'=>'Create DiseaseReport', 'url'=>array('create')),
	array('label'=>'Update DiseaseReport', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DiseaseReport', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DiseaseReport', 'url'=>array('admin')),
);
?>

<h1>View DiseaseReport #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'location',
	),
)); ?>
