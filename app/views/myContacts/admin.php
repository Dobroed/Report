<?php
/* @var $this MyContactsController */
/* @var $model MyContacts */


$this->breadcrumbs=array(
	'My Contacts'=>array('index'),
	'Manage',
);

$this->menu=array(
array('icon' => 'glyphicon glyphicon-home','label'=>'Manage MyContacts', 'url'=>array('admin')),
array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create MyContacts', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search',
    "
    $('.search-button').click(function(){
        $('.search-form').toggle();
            return false;
        });
        $('.search-form form').submit(function(){
            $('#my-contacts-grid').yiiGridView('update', {
            data: $(this).serialize()
        });
        return false;
    });"
);
?>
<?php echo BSHtml::pageHeader('Manage','My Contacts') ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo BSHtml::button('Advanced search',array('class' =>'search-button', 'icon' => BSHtml::GLYPHICON_SEARCH,'color' => BSHtml::BUTTON_COLOR_PRIMARY), '#'); ?></h3>
    </div>
    <div class="panel-body">
        <p>
            You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
                &lt;&gt;</b>
            or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
        </p>
        <div class="search-form" style="display:none">
            <?php $this->renderPartial('_search',array(
                'model'=>$model,
            )); ?>
        </div><!-- search-form -->

        <?php $this->widget('bootstrap.widgets.BsGridView',array(
        'id'=>'my-contacts-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'columns'=>array(
        		'contact_id',
		'last_name',
		'first_name',
		'phone',
		'email',
		'gender',
		/*
		'bithday',
		'prof_id',
		'zip_code',
		'status_id',
		*/
        array(
        'class'=>'bootstrap.widgets.BsButtonColumn',
        ),
        ),
        )); ?>
    </div>
</div>




