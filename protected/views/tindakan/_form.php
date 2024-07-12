<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tindakan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pasien_id'); ?>
		<?php echo $form->textField($model,'pasien_id'); ?>
		<?php echo $form->error($model,'pasien_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_pasien'); ?>
		<?php echo $form->textField($model,'nama_pasien',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keluhan'); ?>
		<?php echo $form->textArea($model,'keluhan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keluhan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diagnosa'); ?>
		<?php echo $form->textArea($model,'diagnosa',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'diagnosa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tindakan'); ?>
		<?php echo $form->textArea($model,'tindakan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tindakan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->