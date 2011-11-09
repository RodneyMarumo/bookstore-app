<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'purchase-history-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'customerId'); ?>
		<?php echo $form->textField($model,'customerId',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'customerId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bookId'); ?>
		<?php echo $form->textField($model,'bookId',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'bookId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sellerId'); ?>
		<?php echo $form->textField($model,'sellerId',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sellerId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->