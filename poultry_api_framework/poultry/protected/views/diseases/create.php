<?php
/* @var $this DiseasesController */
/* @var $model Diseases */

$this->breadcrumbs=array(
	'Diseases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Diseases', 'url'=>array('index')),
	array('label'=>'Manage Diseases', 'url'=>array('admin')),
);
?>

<h1>Create Diseases</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>