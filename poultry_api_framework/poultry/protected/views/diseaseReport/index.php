<?php
/* @var $this DiseaseReportController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Disease Reports',
);

$this->menu=array(
	array('label'=>'Create DiseaseReport', 'url'=>array('create')),
	array('label'=>'Manage DiseaseReport', 'url'=>array('admin')),
);
?>

<h1>Disease Reports</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
