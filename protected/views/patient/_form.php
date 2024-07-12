<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'patient-form',
    'enableAjaxValidation'=>false,
)); ?>

<?php echo $form->errorSummary($patient); ?>

<div class="row">
    <?php echo $form->labelEx($patient,'name'); ?>
    <?php echo $form->textField($patient,'name',array('size'=>60,'maxlength'=>100)); ?>
    <?php echo $form->error($patient,'name'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($patient,'age'); ?>
    <?php echo $form->textField($patient,'age'); ?>
    <?php echo $form->error($patient,'age'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($patient,'address'); ?>
    <?php echo $form->textField($patient,'address',array('size'=>60,'maxlength'=>255)); ?>
    <?php echo $form->error($patient,'address'); ?>
</div>

<div class="row buttons">
    <?php echo CHtml::submitButton($patient->isNewRecord ? 'Create' : 'Save'); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
