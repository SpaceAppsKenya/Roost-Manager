<?php
/* @var $this RaringController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rarings',
);

$this->menu=array(
	array('label'=>'Create Raring', 'url'=>array('create')),
	array('label'=>'Manage Raring', 'url'=>array('admin')),
);
?>

<h1>Rarings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
