<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => 'phone_form',
        'htmlOptions' => array(
            'class' => 'phone-class'
        )
    )
); ?>
<?php echo $form->textFieldControlGroup($model, 'phone'); ?>
<?php echo $form->textFieldControlGroup($model, 'company'); ?>
<?php
echo BSHtml::submitButton('Submit', array(
    'color' => BSHtml::BUTTON_COLOR_PRIMARY
));
?>
<?php $this->endWidget() ?>

