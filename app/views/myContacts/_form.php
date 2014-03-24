<?php
/* @var $this MyContactsController */
/* @var $model MyContacts */
/* @var $form BSActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
	'id'=>'my-contacts-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'layout' => BSHtml::FORM_LAYOUT_HORIZONTAL,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'last_name',array('maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'first_name',array('maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'phone',array('maxlength'=>11)); ?>

            <?php echo $form->textFieldControlGroup($model,'email',array('maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'gender',array('maxlength'=>10)); ?>

            <?php echo $form->textFieldControlGroup($model,'bithday'); ?>

            <?php echo $form->textFieldControlGroup($model,'prof_id'); ?>

            <?php echo $form->dropDownListControlGroup($model,'zip_code',
                    $model->getZipcode(),
                    array('empty' => 'Something ...', 'class' => BSHtml::INPUT_SIZE_SM)
); ?>

            <?php echo $form->textFieldControlGroup($model,'status_id'); ?>

            <?php echo BSHtml::formActions(array(
    BSHtml::submitButton('Submit', array('color' => BSHtml::BUTTON_COLOR_PRIMARY)),
)); ?>

    <?php $this->endWidget(); ?>

</div><!-- form -->