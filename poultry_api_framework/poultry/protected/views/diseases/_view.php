<?php
/* @var $this DiseasesController */
/* @var $data Diseases */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('symptons')); ?>:</b>
	<?php echo CHtml::encode($data->symptons); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prevention')); ?>:</b>
	<?php echo CHtml::encode($data->prevention); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('treatement')); ?>:</b>
	<?php echo CHtml::encode($data->treatement); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('photos')); ?>:</b>
	<?php echo CHtml::encode($data->photos); ?>
	<br />

	*/ ?>

</div>