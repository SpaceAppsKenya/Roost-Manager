<?php
/* @var $this BreedsController */
/* @var $model Breeds */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'breeds-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'characteristics'); ?>
		<?php echo $form->textField($model,'characteristics',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'characteristics'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'environmental_factors'); ?>
		<?php echo $form->textField($model,'environmental_factors',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'environmental_factors'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tolerance'); ?>
		<?php echo $form->textField($model,'tolerance',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'tolerance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quality'); ?>
		<?php echo $form->textField($model,'quality',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'quality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'period'); ?>
		<?php echo $form->textField($model,'period',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'period'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->