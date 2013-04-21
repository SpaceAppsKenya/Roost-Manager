<?php
/* @var $this BreedsController */
/* @var $model Breeds */

$this->breadcrumbs=array(
	'Breeds'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Breeds', 'url'=>array('index')),
	array('label'=>'Create Breeds', 'url'=>array('create')),
	array('label'=>'View Breeds', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Breeds', 'url'=>array('admin')),
);
?>

<h1>Update Breeds <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>