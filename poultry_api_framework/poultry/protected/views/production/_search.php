<?php
/* @var $this ProductionController */
/* @var $model Production */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_of_eggs'); ?>
		<?php echo $form->textField($model,'no_of_eggs',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kgs_of_feed'); ?>
		<?php echo $form->textField($model,'kgs_of_feed',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chicken_sold'); ?>
		<?php echo $form->textField($model,'chicken_sold',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eggs_sold'); ?>
		<?php echo $form->textField($model,'eggs_sold',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_per_egg'); ?>
		<?php echo $form->textField($model,'price_per_egg',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'production_date'); ?>
		<?php echo $form->textField($model,'production_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->