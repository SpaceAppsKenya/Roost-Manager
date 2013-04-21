<?php
/* @var $this StockController */
/* @var $data Stock */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_chicken')); ?>:</b>
	<?php echo CHtml::encode($data->total_chicken); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('laying_hens')); ?>:</b>
	<?php echo CHtml::encode($data->laying_hens); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chics')); ?>:</b>
	<?php echo CHtml::encode($data->chics); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cockrels')); ?>:</b>
	<?php echo CHtml::encode($data->cockrels); ?>
	<br />


</div>