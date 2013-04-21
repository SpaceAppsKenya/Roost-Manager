<?php
/* @var $this ProductionController */
/* @var $model Production */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'production-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'no_of_eggs'); ?>
		<?php echo $form->textField($model,'no_of_eggs',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'no_of_eggs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kgs_of_feed'); ?>
		<?php echo $form->textField($model,'kgs_of_feed',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'kgs_of_feed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chicken_sold'); ?>
		<?php echo $form->textField($model,'chicken_sold',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'chicken_sold'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eggs_sold'); ?>
		<?php echo $form->textField($model,'eggs_sold',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'eggs_sold'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_per_egg'); ?>
		<?php echo $form->textField($model,'price_per_egg',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'price_per_egg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'production_date'); ?>
		<?php echo $form->textField($model,'production_date'); ?>
		<?php echo $form->error($model,'production_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->