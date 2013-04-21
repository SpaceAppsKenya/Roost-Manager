<?php
/* @var $this DiseaseReportController */
/* @var $model DiseaseReport */

$this->breadcrumbs=array(
	'Disease Reports'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DiseaseReport', 'url'=>array('index')),
	array('label'=>'Manage DiseaseReport', 'url'=>array('admin')),
);
?>

<h1>Create DiseaseReport</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>