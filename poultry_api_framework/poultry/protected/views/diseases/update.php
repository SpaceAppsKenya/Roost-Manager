<?php
/* @var $this DiseasesController */
/* @var $model Diseases */

$this->breadcrumbs=array(
	'Diseases'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Diseases', 'url'=>array('index')),
	array('label'=>'Create Diseases', 'url'=>array('create')),
	array('label'=>'View Diseases', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Diseases', 'url'=>array('admin')),
);
?>

<h1>Update Diseases <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>