<?php
/* @var $this BreedsController */
/* @var $data Breeds */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('characteristics')); ?>:</b>
	<?php echo CHtml::encode($data->characteristics); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('environmental_factors')); ?>:</b>
	<?php echo CHtml::encode($data->environmental_factors); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tolerance')); ?>:</b>
	<?php echo CHtml::encode($data->tolerance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quality')); ?>:</b>
	<?php echo CHtml::encode($data->quality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('period')); ?>:</b>
	<?php echo CHtml::encode($data->period); ?>
	<br />


</div>