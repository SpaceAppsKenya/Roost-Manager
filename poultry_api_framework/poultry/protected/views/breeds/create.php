<?php
/* @var $this BreedsController */
/* @var $model Breeds */

$this->breadcrumbs=array(
	'Breeds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Breeds', 'url'=>array('index')),
	array('label'=>'Manage Breeds', 'url'=>array('admin')),
);
?>

<h1>Create Breeds</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>