<?php
/* @var $this DiseasesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Diseases',
);

$this->menu=array(
	array('label'=>'Create Diseases', 'url'=>array('create')),
	array('label'=>'Manage Diseases', 'url'=>array('admin')),
);
?>

<h1>Diseases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
