<?php
    /* @var $this MyContactsController */
    /* @var $model MyContacts */
?>

<?php
$this->breadcrumbs=array(
	'My Contacts'=>array('index'),
	'Create',
);

    $this->menu=array(
        array('icon' => 'glyphicon glyphicon-home','label'=>'Manage MyContacts', 'url'=>array('admin')),
    );
    ?>
<?php echo BSHtml::pageHeader('Create','MyContacts') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>