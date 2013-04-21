<?php
/* @var $this StockController */
/* @var $model Stock */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stock-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'total_chicken'); ?>
		<?php echo $form->textField($model,'total_chicken',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'total_chicken'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'laying_hens'); ?>
		<?php echo $form->textField($model,'laying_hens',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'laying_hens'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chics'); ?>
		<?php echo $form->textField($model,'chics'); ?>
		<?php echo $form->error($model,'chics'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cockrels'); ?>
		<?php echo $form->textField($model,'cockrels'); ?>
		<?php echo $form->error($model,'cockrels'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->