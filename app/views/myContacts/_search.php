<?php
/* @var $this MyContactsController */
/* @var $model MyContacts */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'contact_id'); ?>

                    <?php echo $form->textFieldControlGroup($model,'last_name',array('maxlength'=>45)); ?>

                    <?php echo $form->textFieldControlGroup($model,'first_name',array('maxlength'=>45)); ?>

                    <?php echo $form->textFieldControlGroup($model,'phone',array('maxlength'=>11)); ?>

                    <?php echo $form->textFieldControlGroup($model,'email',array('maxlength'=>45)); ?>

                    <?php echo $form->textFieldControlGroup($model,'gender',array('maxlength'=>10)); ?>

                    <?php echo $form->textFieldControlGroup($model,'bithday'); ?>

                    <?php echo $form->textFieldControlGroup($model,'prof_id'); ?>

                    <?php echo $form->textFieldControlGroup($model,'zip_code'); ?>

                    <?php echo $form->textFieldControlGroup($model,'status_id'); ?>

        <div class="form-actions">
        <?php echo BSHtml::submitButton('Search',  array('color' => BSHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->