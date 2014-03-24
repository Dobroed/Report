<?php
/* @var $this MyContactsController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'My Contacts',
);

$this->menu=array(
array('label'=>'Create MyContacts','url'=>array('create')),
array('label'=>'Manage MyContacts','url'=>array('admin')),
);
?>
<?php echo BSHtml::pageHeader('My Contacts') ?>
<?php $this->widget('bootstrap.widgets.BsListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>