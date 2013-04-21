<?php
/* @var $this RaringController */
/* @var $model Raring */

$this->breadcrumbs=array(
	'Rarings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Raring', 'url'=>array('index')),
	array('label'=>'Manage Raring', 'url'=>array('admin')),
);
?>

<h1>Create Raring</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>