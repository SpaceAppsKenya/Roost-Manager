<?php
/* @var $this RaringController */
/* @var $model Raring */

$this->breadcrumbs=array(
	'Rarings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Raring', 'url'=>array('index')),
	array('label'=>'Create Raring', 'url'=>array('create')),
	array('label'=>'View Raring', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Raring', 'url'=>array('admin')),
);
?>

<h1>Update Raring <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>