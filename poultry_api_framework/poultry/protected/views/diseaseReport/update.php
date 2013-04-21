<?php
/* @var $this DiseaseReportController */
/* @var $model DiseaseReport */

$this->breadcrumbs=array(
	'Disease Reports'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DiseaseReport', 'url'=>array('index')),
	array('label'=>'Create DiseaseReport', 'url'=>array('create')),
	array('label'=>'View DiseaseReport', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DiseaseReport', 'url'=>array('admin')),
);
?>

<h1>Update DiseaseReport <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>