<?php
    /* @var $this MyContactsController */
    /* @var $model MyContacts */
?>

<?php
$this->breadcrumbs=array(
	'My Contacts'=>array('index'),
	$model->contact_id=>array('view','id'=>$model->contact_id),
	'Update',
);

    $this->menu=array(
    array('icon' => 'glyphicon glyphicon-home','label'=>'Manage MyContacts', 'url'=>array('admin')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create MyContacts', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete MyContacts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->contact_id),'confirm'=>'Are you sure you want to delete this item?')),
    );
    ?>
<?php echo BSHtml::pageHeader('Update','MyContacts '.$model->contact_id) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>