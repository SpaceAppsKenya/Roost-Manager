<?php
/* @var $this ProductionController */
/* @var $model Production */

$this->breadcrumbs=array(
	'Productions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Production', 'url'=>array('index')),
	array('label'=>'Create Production', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#production-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Productions</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'production-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'no_of_eggs',
		'kgs_of_feed',
		'chicken_sold',
		'eggs_sold',
		'price_per_egg',
		/*
		'production_date',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
