<?php
/* @var $this ProductionController */
/* @var $data Production */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_of_eggs')); ?>:</b>
	<?php echo CHtml::encode($data->no_of_eggs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kgs_of_feed')); ?>:</b>
	<?php echo CHtml::encode($data->kgs_of_feed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chicken_sold')); ?>:</b>
	<?php echo CHtml::encode($data->chicken_sold); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eggs_sold')); ?>:</b>
	<?php echo CHtml::encode($data->eggs_sold); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_per_egg')); ?>:</b>
	<?php echo CHtml::encode($data->price_per_egg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('production_date')); ?>:</b>
	<?php echo CHtml::encode($data->production_date); ?>
	<br />


</div>