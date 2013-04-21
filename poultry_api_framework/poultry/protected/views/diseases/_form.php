<?php
/* @var $this DiseasesController */
/* @var $model Diseases */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'diseases-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->textField($model,'category',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'symptons'); ?>
		<?php echo $form->textArea($model,'symptons',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'symptons'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prevention'); ?>
		<?php echo $form->textArea($model,'prevention',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'prevention'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'treatement'); ?>
		<?php echo $form->textArea($model,'treatement',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'treatement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photos'); ?>
		<?php echo $form->textField($model,'photos',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'photos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->