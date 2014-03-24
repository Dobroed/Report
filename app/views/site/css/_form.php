<div class="bs-docs-section">
<div class="page-header">
    <h1 id="forms">Forms</h1>
</div>

<h2 id="forms-example">Basic example</h2>

<p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>
        &lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to
    <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p>

<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
//        'layout' => BSHtml::FORM_LAYOUT_HORIZONTAL,
        'enableAjaxValidation' => true,
        'id' => 'user_form',
        'htmlOptions' => array(
            'class' => 'bs-example'
        )
    )
); ?>
<fieldset>
    <legend>Legend</legend>
    <?php echo $form->textFieldControlGroup(
        $model,
        'username'
    ); ?>
    <?php echo $form->passwordFieldControlGroup(
        $model,
        'password'
    ); ?>
    <?php echo $form->emailFieldControlGroup(
        $model,
        'email'
    ); ?>
    <?php echo BSHtml::submitButton('Submit', array('color' => BSHtml::BUTTON_COLOR_PRIMARY)) ?>
</fieldset>
<?php $this->endWidget(); ?>
<!-- /example -->
<div class="highlight"><pre >
<span class="pre_black">
<span class="pre_blue">&lt;?php<br>$form&nbsp;</span><span class="pre_green">=&nbsp;</span><span
       class="pre_blue">$this</span><span class="pre_green">-&gt;</span><span class="pre_blue">beginWidget</span><span
        class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsActiveForm'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span style="color: #FF8000;">// &nbsp; &nbsp; &nbsp; &nbsp;'layout'&nbsp;=&gt;&nbsp;BSHtml::FORM_LAYOUT_HORIZONTAL,<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'enableAjaxValidation'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
       class="pre_blue">true</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'id'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'user_form'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'htmlOptions'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'bs-example'<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br></span>&lt;fieldset&gt;<br>&nbsp;&nbsp; &nbsp;&lt;legend&gt;Legend&lt;/legend&gt;<br><span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">textFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">passwordFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'password'</span><span
        class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">emailFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'email'</span><span class="pre_green">);<br></span><span
       class="pre_blue">?&gt;<br>&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">submitButton</span><span
        class="pre_green">(</span><span class="pre_red">'Submit'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
       class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_COLOR_PRIMARY<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span>&lt;/fieldset&gt;<br><span
        class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
       class="pre_blue">endWidget</span><span class="pre_green">();<br></span><span
       class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>


<h2 id="forms-inline">Inline form</h2>

<p>Add <code>.form-inline</code> for left-aligned and inline-block controls for a compact layout.</p>

<div class="bs-callout bs-callout-danger">
    <h4>Requires custom widths</h4>

    <p>Inputs, selects, and textareas are 100% wide by default in Bootstrap. To use the inline form, you'll have to set
        a width on the form controls used within.</p>
</div>
<div class="bs-callout bs-callout-danger">
    <h4>Always add labels</h4>

    <p>Screen readers will have trouble with your forms if you don't include a label for every input. For these inline
        forms, you can hide the labels using the <code>.sr-only</code> class.</p>
</div>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'layout' => BSHtml::FORM_LAYOUT_INLINE,
        'enableAjaxValidation' => true,
        'id' => 'user_form_inline',
        'htmlOptions' => array(
            'class' => 'bs-example'
        )
    )
); ?>
<fieldset>
    <legend>Legend</legend>
    <?php echo $form->textFieldControlGroup(
        $model,
        'username'
    ); ?>
    <?php echo $form->passwordFieldControlGroup(
        $model,
        'password'
    ); ?>
    <?php echo $form->emailFieldControlGroup(
        $model,
        'email'
    ); ?>
    <?php echo BSHtml::submitButton('Submit', array('color' => BSHtml::BUTTON_COLOR_PRIMARY)); ?>
</fieldset>
<?php $this->endWidget(); ?>
<!-- /example -->
<div class="highlight"><pre >
<span class="pre_black">
<span class="pre_blue">&lt;?php<br>$form&nbsp;</span><span class="pre_green">=&nbsp;</span><span
       class="pre_blue">$this</span><span class="pre_green">-&gt;</span><span class="pre_blue">beginWidget</span><span
        class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsActiveForm'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'layout'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
       class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">FORM_LAYOUT_INLINE</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'enableAjaxValidation'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'id'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'user_form_inline'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'htmlOptions'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'bs-example'<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br></span>&lt;fieldset&gt;<br>&nbsp;&nbsp; &nbsp;&lt;legend&gt;Legend&lt;/legend&gt;<br>&nbsp;&nbsp; &nbsp;<span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">textFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">);<br></span><span class="pre_blue">?&gt;<br></span> &nbsp; &nbsp;<span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">passwordFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'password'</span><span
        class="pre_green">);<br></span><span class="pre_blue">?&gt;<br></span> &nbsp; &nbsp;<span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">emailFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'email'</span><span class="pre_green">);<br></span><span
       class="pre_blue">?&gt;<br></span> &nbsp; &nbsp;<span class="pre_blue">&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">BSHtml</span><span
        class="pre_green">::</span><span class="pre_blue">submitButton</span><span class="pre_green">(</span><span
        class="pre_red">'Submit'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
       class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_COLOR_PRIMARY<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span>&lt;/fieldset&gt;<br><span
        class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
       class="pre_blue">endWidget</span><span class="pre_green">();<br></span><span
       class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>


<h2 id="forms-horizontal">Horizontal form</h2>

<p>Use Bootstrap's predefined grid classes to align labels and groups of form controls in a horizontal layout by adding
    <code>.form-horizontal</code> to the form. Doing so changes <code>.form-group</code>s to behave as grid rows, so no
    need for <code>.row</code>.</p>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'layout' => BSHtml::FORM_LAYOUT_HORIZONTAL,
        'enableAjaxValidation' => true,
        'id' => 'user_form_horizontal',
        'htmlOptions' => array(
            'class' => 'bs-example'
        )
    )
); ?>
<fieldset>
    <legend>Legend</legend>
    <?php echo $form->textFieldControlGroup(
        $model,
        'username'
    ); ?>
    <?php echo $form->textFieldControlGroup($model, 'username', array('prepend' => BSHtml::icon(BSHtml::GLYPHICON_USER))); ?>
    <?php echo $form->textFieldControlGroup($model, 'username', array('append' => BSHtml::icon(BSHtml::GLYPHICON_USER))); ?>
    <?php echo $form->passwordFieldControlGroup(
        $model,
        'password'
    ); ?>
    <?php echo $form->emailFieldControlGroup(
        $model,
        'email'
    ); ?>
    <?php echo $form->dropDownListControlGroup($model, 'profile',
        
        array('1', '2', '3', '4', '5'),
        array('empty' => 'Something ...')
    ); ?>
    <?php echo $form->dropDownListControlGroup($model, 'profile',
        array('1', '2', '3', '4', '5'), array('multiple' => true)); ?>

    <?php echo $form->checkBoxControlGroup($model, 'profile'); ?>
    <?php echo $form->inlineCheckBoxListControlGroup($model, 'profile', array('1', '2', '3')); ?>
    <?php echo $form->checkBoxListControlGroup($model, 'profile',
        array("Option one is this and that—be sure to include why it's great")); ?>

    <?php echo $form->radioButtonControlGroup($model, 'profile'); ?>
    <?php echo $form->radioButtonListControlGroup($model, 'profile', array(
        'Option one is this and that—be sure to include why it\'s great',
        'Option two can is something else and selecting it will deselect option one',
    )); ?>
</fieldset>
<?php echo BSHtml::formActions(array(
    BSHtml::submitButton('Submit', array('color' => BSHtml::BUTTON_COLOR_PRIMARY)),
)); ?>

<?php $this->endWidget(); ?>
<!-- /example -->
<div class="highlight"><pre >
<span class="pre_black">
<span class="pre_blue">&lt;?php<br>$form&nbsp;</span><span class="pre_green">=&nbsp;</span><span
       class="pre_blue">$this</span><span class="pre_green">-&gt;</span><span class="pre_blue">beginWidget</span><span
        class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsActiveForm'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'layout'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
       class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">FORM_LAYOUT_HORIZONTAL</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'enableAjaxValidation'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'id'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'user_form_horizontal'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'htmlOptions'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'bs-example'<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br></span>&lt;fieldset&gt;<br>&lt;legend&gt;Legend&lt;/legend&gt;<br><span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">textFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">textFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'prepend'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
       class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
       class="pre_blue">icon</span><span class="pre_green">(</span><span
       class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">GLYPHICON_USER</span><span
        class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">textFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'append'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
       class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
       class="pre_blue">icon</span><span class="pre_green">(</span><span
       class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">GLYPHICON_USER</span><span
        class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">passwordFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'password'</span><span
        class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">emailFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'email'</span><span class="pre_green">);<br></span><span
       class="pre_blue">?&gt;<br>&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">dropDownListControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'profile'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'1'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'2'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'3'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'4'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'5'<br></span><span
        class="pre_green">),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'empty'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'Something&nbsp;...'<br></span><span class="pre_green">));<br></span><span
       class="pre_blue">?&gt;<br>&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">dropDownListControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'profile'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'1'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'2'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'3'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'4'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'5'<br></span><span
        class="pre_green">),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'multiple'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span><br><span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">checkBoxControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'profile'</span><span
        class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">inlineCheckBoxListControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'profile'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'1'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'2'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'3'<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">checkBoxListControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'profile'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">"Option&nbsp;one&nbsp;is&nbsp;this&nbsp;and&nbsp;that—be&nbsp;sure&nbsp;to&nbsp;include&nbsp;why&nbsp;it's&nbsp;great"<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span><br><span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">radioButtonControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'profile'</span><span
        class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">radioButtonListControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'profile'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'Option&nbsp;one&nbsp;is&nbsp;this&nbsp;and&nbsp;that—be&nbsp;sure&nbsp;to&nbsp;include&nbsp;why&nbsp;it\'s&nbsp;great'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'Option&nbsp;two&nbsp;can&nbsp;is&nbsp;something&nbsp;else&nbsp;and&nbsp;selecting&nbsp;it&nbsp;will&nbsp;deselect&nbsp;option&nbsp;one'<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span>&lt;/fieldset&gt;<br><span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">formActions</span><span
        class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_blue">BSHtml</span><span
        class="pre_green">::</span><span class="pre_blue">submitButton</span><span class="pre_green">(</span><span
        class="pre_red">'Submit'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
       class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_COLOR_PRIMARY<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_green">))<br>));<br></span><span class="pre_blue">?&gt;<br></span><br><span
        class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
       class="pre_blue">endWidget</span><span class="pre_green">();<br></span><span
       class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>

<h2 id="forms-controls">Supported controls</h2>

<p>Examples of standard form controls supported in an example form layout.</p>

<h3>Inputs</h3>

<p>Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>,
    <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>,
    <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and
    <code>color</code>.</p>

<div class="bs-callout bs-callout-danger">
    <h4>Type declaration required</h4>

    <p>Inputs will only be fully styled if their <code>type</code> is properly declared.</p>
</div>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'htmlOptions' => array(
            'class' => 'bs-example'
        )
    )
); ?>
<?php echo $form->textField($model, 'username', array('placeholder' => 'textField')); ?>
<br/>
<?php echo $form->passwordField($model, 'username', array('placeholder' => 'passwordField')); ?>
<br/>
<?php echo $form->numberField($model, 'username', array('placeholder' => 'numberField')); ?>
<br/>
<?php echo $form->emailField($model, 'username', array('placeholder' => 'emailField')); ?>
<br/>
<?php echo $form->urlField($model, 'username', array('placeholder' => 'urlField')); ?>
<br/>
<?php echo $form->rangeField($model, 'username', array('placeholder' => 'rangeField')); ?>
<br/>
<?php echo $form->dateField($model, 'username', array('placeholder' => 'dateField')); ?>
<br/>
<?php echo $form->fileField($model, 'username', array('placeholder' => 'fileField')); ?>
<br/>
<?php echo $form->telField($model, 'email', array('placeholder' => 'telField')); ?>
<br/>
<?php $this->endWidget() ?>

<div class="highlight">
    <pre >
<span class="pre_black">
<span class="pre_blue">&lt;?php<br>$form&nbsp;</span><span class="pre_green">=&nbsp;</span><span
       class="pre_blue">$this</span><span class="pre_green">-&gt;</span><span class="pre_blue">beginWidget</span><span
        class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsActiveForm'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'enableAjaxValidation'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'id'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">uniqid</span><span
        class="pre_green">(</span><span class="pre_red">'user_'</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'htmlOptions'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'bs-example'<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">textField</span><span class="pre_green">(</span><span
       class="pre_blue">$model</span><span class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'placeholder'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'textField'<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span> &nbsp; &nbsp;<br><span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">passwordField</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'placeholder'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'passwordField'<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span> &nbsp; &nbsp;<br><span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">numberField</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'placeholder'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'numberField'<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span> &nbsp; &nbsp;<br><span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">emailField</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'placeholder'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'emailField'<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span> &nbsp; &nbsp;<br><span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">urlField</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'placeholder'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'urlField'<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span> &nbsp; &nbsp;<br><span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">rangeField</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'placeholder'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'rangeField'<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span> &nbsp; &nbsp;<br><span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">dateField</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'placeholder'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'dateField'<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span> &nbsp; &nbsp;<br><span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">fileField</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'placeholder'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'fileField'<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span> &nbsp; &nbsp;<br><span
        class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
       class="pre_blue">endWidget</span><span class="pre_green">();<br></span><span
       class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>

<h3>Textarea</h3>

<p>Form control which supports multiple lines of text. Change <code>rows</code> attribute as necessary.</p>

<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'htmlOptions' => array(
            'class' => 'bs-example'
        )
    )
); ?>
<?php echo $form->textArea($model, 'username'); ?>
<?php $this->endWidget() ?>

<div class="highlight">
    <pre >
      <span class="pre_black">
<span class="pre_blue">&lt;?php<br>$form&nbsp;</span><span class="pre_green">=&nbsp;</span><span
             class="pre_blue">$this</span><span class="pre_green">-&gt;</span><span
             class="pre_blue">beginWidget</span><span class="pre_green">(</span><span
              class="pre_red">'bootstrap.widgets.BsActiveForm'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
              class="pre_red">'enableAjaxValidation'&nbsp;</span><span
              class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span
              class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
              class="pre_red">'id'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
             class="pre_blue">uniqid</span><span class="pre_green">(</span><span class="pre_red">'user_'</span><span
              class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
              class="pre_red">'htmlOptions'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
              class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
              class="pre_red">'bs-example'<br>&nbsp;&nbsp; &nbsp;</span><span
              class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
              class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
              class="pre_green">-&gt;</span><span class="pre_blue">textArea</span><span
              class="pre_green">(</span><span class="pre_blue">$model</span><span class="pre_green">,&nbsp;</span><span
              class="pre_red">'username'</span><span class="pre_green">);<br></span><span
             class="pre_blue">?&gt;<br>&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
             class="pre_blue">endWidget</span><span class="pre_green">();<br></span><span
             class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>

<h3>Checkboxes and radios</h3>

<p>Checkboxes are for selecting one or several options in a list while radios are for selecting one option from
    many.</p>
<h4>Default (stacked)</h4>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'htmlOptions' => array(
            'class' => 'bs-example'
        )
    )
); ?>
<?php echo $form->checkBoxControlGroup($model, 'profile'); ?>
<?php echo $form->inlineCheckBoxListControlGroup($model, 'profile', array('1', '2', '3')); ?>
<?php echo $form->checkBoxListControlGroup($model, 'profile',
    array("Option one is this and that—be sure to include why it's great")); ?>

<?php echo $form->radioButtonControlGroup($model, 'profile'); ?>
<?php echo $form->radioButtonListControlGroup($model, 'profile', array(
    'Option one is this and that—be sure to include why it\'s great',
    'Option two can is something else and selecting it will deselect option one',
)); ?>
<?php $this->endWidget() ?>

<div class="highlight">
    <pre >
<span class="pre_black">
<span class="pre_blue">&lt;?php<br>$form&nbsp;</span><span class="pre_green">=&nbsp;</span><span
       class="pre_blue">$this</span><span class="pre_green">-&gt;</span><span class="pre_blue">beginWidget</span><span
        class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsActiveForm'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'enableAjaxValidation'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'id'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">uniqid</span><span
        class="pre_green">(</span><span class="pre_red">'user_'</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'htmlOptions'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'bs-example'<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">checkBoxControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'profile'</span><span
        class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">inlineCheckBoxListControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'profile'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'1'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'2'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'3'<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">checkBoxListControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'profile'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">"Option&nbsp;one&nbsp;is&nbsp;this&nbsp;and&nbsp;that—be&nbsp;sure&nbsp;to&nbsp;include&nbsp;why&nbsp;it's&nbsp;great"<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span><br><span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">radioButtonControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'profile'</span><span
        class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">radioButtonListControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'profile'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'Option&nbsp;one&nbsp;is&nbsp;this&nbsp;and&nbsp;that—be&nbsp;sure&nbsp;to&nbsp;include&nbsp;why&nbsp;it\'s&nbsp;great'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'Option&nbsp;two&nbsp;can&nbsp;is&nbsp;something&nbsp;else&nbsp;and&nbsp;selecting&nbsp;it&nbsp;will&nbsp;deselect&nbsp;option&nbsp;one'<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br>$this</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">endWidget</span><span class="pre_green">();<br></span><span
       class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>
<h3 id="forms-disabled-fieldsets">Disabled fieldsets</h3>

<p>Add the <code>disabled</code> attribute to a <code>&lt;fieldset&gt;</code> to disable all the controls within the
    <code>&lt;fieldset&gt;</code> at once.</p>

<div class="bs-callout bs-callout-warning">
    <h4>Link functionality of <code>&lt;a&gt;</code> not impacted</h4>

    <p>This class will only change the appearance of <code>&lt;a class="btn btn-default"&gt;</code> buttons, not their
        functionality. Use custom JavaScript to disable links here.</p>
</div>

<div class="bs-callout bs-callout-danger">
    <h4>Cross-browser compatibility</h4>

    <p>While Bootstrap will apply these styles in all browsers, Internet Explorer 9 and below don't actually support the
        <code>disabled</code> attribute on a <code>&lt;fieldset&gt;</code>. Use custom JavaScript to disable the
        fieldset in these browsers.</p>
</div>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'htmlOptions' => array(
            'class' => 'bs-example bs-example-control-sizing'
        )
    )
); ?>
<?php echo $form->textFieldControlGroup($model, 'username',
    array(
        'disabled' => true,
    )
); ?>

<?php $this->endWidget() ?>
<div class="highlight">
    <pre >
<span class="pre_black">
<span class="pre_blue">&lt;?php<br>$form&nbsp;</span><span class="pre_green">=&nbsp;</span><span
       class="pre_blue">$this</span><span class="pre_green">-&gt;</span><span class="pre_blue">beginWidget</span><span
        class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsActiveForm'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'enableAjaxValidation'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'id'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">uniqid</span><span
        class="pre_green">(</span><span class="pre_red">'user_'</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'htmlOptions'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'bs-example&nbsp;bs-example-control-sizing'<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">textFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'disabled'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span><br><span
        class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
       class="pre_blue">endWidget</span><span class="pre_green">();<br></span><span
       class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>

<h3 id="forms-validation">Validation states</h3>

<p>Bootstrap includes validation styles for error, warning, and success states on form controls. To use, add <code>.has-warning</code>,
    <code>.has-error</code>, or <code>.has-success</code> to the parent element. Any <code>.control-label</code>, <code>.form-control</code>,
    and <code>.help-block</code> within that element will receive the validation styles.</p>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'layout' => BSHtml::FORM_LAYOUT_HORIZONTAL,
        'htmlOptions' => array(
            'class' => 'bs-example bs-example-control-sizing'
        )
    )
); ?>
<?php echo $form->textFieldControlGroup($model, 'username',
    array(
        'controlOptions' => array('class' => 'has-success col-lg-10'),
    )
); ?>
<?php echo $form->textFieldControlGroup($model, 'username',
    array(
        'groupOptions' => array('class' => 'has-success'),
    )
); ?>
<?php echo $form->textFieldControlGroup($model, 'username',
    array(
        'controlOptions' => array('class' => 'has-warning col-lg-10'),
    )
); ?>
<?php echo $form->textFieldControlGroup($model, 'username',
    array(
        'controlOptions' => array('class' => 'has-error col-lg-10'),
    )
); ?>
<?php $this->endWidget() ?>
<div class="highlight">
    <pre >
<span class="pre_black">
<span class="pre_blue">&lt;?php<br>$form&nbsp;</span><span class="pre_green">=&nbsp;</span><span
       class="pre_blue">$this</span><span class="pre_green">-&gt;</span><span class="pre_blue">beginWidget</span><span
        class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsActiveForm'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'enableAjaxValidation'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'id'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">uniqid</span><span
        class="pre_green">(</span><span class="pre_red">'user_'</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'layout'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
       class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">FORM_LAYOUT_HORIZONTAL</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'htmlOptions'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'bs-example&nbsp;bs-example-control-sizing'<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br></span> &nbsp; &nbsp;<span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">textFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'controlOptions'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'has-success&nbsp;col-lg-10'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">)<br>));<br></span><span
       class="pre_blue">?&gt;<br></span> &nbsp; &nbsp;<span class="pre_blue">&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">textFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'groupOptions'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'has-success'<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br></span> &nbsp; &nbsp;<span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">textFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'controlOptions'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'has-warning&nbsp;col-lg-10'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">)<br>));<br></span><span
       class="pre_blue">?&gt;<br></span> &nbsp; &nbsp;<span class="pre_blue">&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">textFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'controlOptions'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'has-error&nbsp;col-lg-10'<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br>$this</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">endWidget</span><span class="pre_green">();<br></span><span
       class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>


<h2 id="forms-control-sizes">Control sizing</h2>

<p>Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like
    <code>.col-lg-*</code>.</p>

<h3>Height sizing</h3>

<p>Create larger or smaller form controls that match button sizes.</p>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'htmlOptions' => array(
            'class' => 'bs-example bs-example-control-sizing'
        )
    )
); ?>
<?php echo $form->textFieldControlGroup($model, 'username', array('class' => BSHtml::INPUT_SIZE_LG)); ?>
<?php echo $form->textFieldControlGroup($model, 'username'); ?>
<?php echo $form->textFieldControlGroup($model, 'username', array('class' => BSHtml::INPUT_SIZE_SM)); ?>
<?php echo $form->dropDownListControlGroup($model, 'profile',
    array('1', '2', '3', '4', '5'),
    array('empty' => 'Something ...', 'class' => BSHtml::INPUT_SIZE_LG)
); ?>
<?php echo $form->dropDownListControlGroup($model, 'profile',
    array('1', '2', '3', '4', '5'),
    array('empty' => 'Something ...')
); ?>
<?php echo $form->dropDownListControlGroup($model, 'profile',
    array('1', '2', '3', '4', '5'),
    array('empty' => 'Something ...', 'class' => BSHtml::INPUT_SIZE_SM)
); ?>
<?php $this->endWidget() ?>
<div class="highlight">
    <pre >
<span class="pre_black">
<span class="pre_blue">&lt;?php<br>$form&nbsp;</span><span class="pre_green">=&nbsp;</span><span
       class="pre_blue">$this</span><span class="pre_green">-&gt;</span><span class="pre_blue">beginWidget</span><span
        class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsActiveForm'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'enableAjaxValidation'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'id'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">uniqid</span><span
        class="pre_green">(</span><span class="pre_red">'user_'</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'htmlOptions'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'bs-example&nbsp;bs-example-control-sizing'<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">textFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
       class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">INPUT_SIZE_LG<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">textFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">textFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
       class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">INPUT_SIZE_SM<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">dropDownListControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'profile'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'1'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'2'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'3'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'4'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'5'<br></span><span
        class="pre_green">),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'empty'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'Something&nbsp;...'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
       class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">INPUT_SIZE_LG<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">dropDownListControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'profile'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'1'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'2'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'3'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'4'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'5'<br></span><span
        class="pre_green">),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'empty'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'Something&nbsp;...'<br></span><span class="pre_green">));<br></span><span
       class="pre_blue">?&gt;<br>&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">dropDownListControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'profile'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'1'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'2'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'3'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'4'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'5'<br></span><span
        class="pre_green">),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'empty'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'Something&nbsp;...'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
       class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">INPUT_SIZE_SM<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br>$this</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">endWidget</span><span class="pre_green">();<br></span><span
       class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>

<h3>Column sizing</h3>

<p>Wrap inputs in grid columns, or any custom parent element, to easily enforce desired widths.</p>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'htmlOptions' => array(
            'class' => 'bs-example bs-example-control-sizing'
        )
    )
); ?>
<div class="row">
    <?php echo $form->textFieldControlGroup($model, 'username',
        array(
            'placeholder' => 'col-lg-2',
            'controlOptions' => array('class' => 'col-lg-12'),
            'groupOptions' => array('class' => 'col-lg-2')
        )
    ); ?>
    <?php echo $form->textFieldControlGroup($model, 'username',
        array(
            'placeholder' => 'col-lg-6',
            'controlOptions' => array('class' => 'col-lg-12'),
            'groupOptions' => array('class' => 'col-lg-6')
        )
    ); ?>
</div>
<?php $this->endWidget() ?>
<div class="highlight">
    <pre >
<span class="pre_black">
<span class="pre_blue">&lt;?php<br>$form&nbsp;</span><span class="pre_green">=&nbsp;</span><span
       class="pre_blue">$this</span><span class="pre_green">-&gt;</span><span class="pre_blue">beginWidget</span><span
        class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsActiveForm'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'enableAjaxValidation'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'id'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">uniqid</span><span
        class="pre_green">(</span><span class="pre_red">'user_'</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'htmlOptions'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'bs-example&nbsp;bs-example-control-sizing'<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br></span>&lt;div&nbsp;class="row"&gt;<br>&nbsp;&nbsp; &nbsp;<span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">textFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'placeholder'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'col-lg-2'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'controlOptions'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'col-lg-12'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'groupOptions'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'col-lg-2'<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br></span> &nbsp; &nbsp;<span
        class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
       class="pre_blue">$form</span><span class="pre_green">-&gt;</span><span class="pre_blue">textFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'placeholder'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'col-lg-6'</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'controlOptions'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'col-lg-12'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'groupOptions'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'col-lg-6'<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br></span>&lt;/div&gt;<br><span
        class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
       class="pre_blue">endWidget</span><span class="pre_green">();<br></span><span
       class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>


<h2 id="forms-help-text">Help text</h2>

<p>Block level help text for form controls.</p>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'htmlOptions' => array(
            'class' => 'bs-example'
        )
    )
); ?>
<?php echo $form->textFieldControlGroup($model, 'username',
    array(
        'placeholder' => '',
        'help' => 'A block of help text that breaks onto a new line and may extend beyond one line.'
    )
); ?>
<?php $this->endWidget() ?>
<div class="highlight">
    <pre >
<span class="pre_black">
<span class="pre_blue">&lt;?php<br>$form&nbsp;</span><span class="pre_green">=&nbsp;</span><span
       class="pre_blue">$this</span><span class="pre_green">-&gt;</span><span class="pre_blue">beginWidget</span><span
        class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsActiveForm'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'enableAjaxValidation'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span
        class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'id'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">uniqid</span><span
        class="pre_green">(</span><span class="pre_red">'user_'</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'htmlOptions'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
        class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'bs-example'<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
        class="pre_green">echo&nbsp;</span><span class="pre_blue">$form</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">textFieldControlGroup</span><span
        class="pre_green">(</span><span class="pre_blue">$model</span><span
        class="pre_green">,&nbsp;</span><span class="pre_red">'username'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'placeholder'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_red">''</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'help'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
        class="pre_red">'A&nbsp;block&nbsp;of&nbsp;help&nbsp;text&nbsp;that&nbsp;breaks&nbsp;onto&nbsp;a&nbsp;new&nbsp;line&nbsp;and&nbsp;may&nbsp;extend&nbsp;beyond&nbsp;one&nbsp;line.'<br></span><span
        class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br>$this</span><span
        class="pre_green">-&gt;</span><span class="pre_blue">endWidget</span><span class="pre_green">();<br></span><span
       class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>
</div>