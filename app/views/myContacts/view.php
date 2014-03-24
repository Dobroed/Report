<?php
/* @var $this MyContactsController */
/* @var $model MyContacts */
?>

<?php
$this->breadcrumbs=array(
	'My Contacts'=>array('index'),
	$model->contact_id,
);

$this->menu=array(
array('icon' => 'glyphicon glyphicon-home','label'=>'Manage MyContacts', 'url'=>array('admin')),
array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create MyContacts', 'url'=>array('create')),
array('icon' => 'glyphicon glyphicon-edit','label'=>'Update MyContacts', 'url'=>array('update', 'id'=>$model->contact_id)),
array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete MyContacts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->contact_id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<?php echo BSHtml::pageHeader('View','MyContacts '.$model->contact_id) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
'htmlOptions' => array(
'class' => 'table table-striped table-condensed table-hover',
),
'data'=>$model,
'attributes'=>array(
		'contact_id',
		'last_name',
		'first_name',
		'phone',
		'email',
		'gender',
		'bithday',
		'prof_id',
		'zip_code',
		'status_id',
),
)); ?>