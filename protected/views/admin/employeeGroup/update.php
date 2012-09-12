<?php
/* @var $this EmployeeGroupController */
/* @var $model EmployeeGroup */

$this->breadcrumbs=array(
	'Employee Groups'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmployeeGroup', 'url'=>array('index')),
	array('label'=>'Create EmployeeGroup', 'url'=>array('create')),
	array('label'=>'View EmployeeGroup', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EmployeeGroup', 'url'=>array('admin')),
);
?>

<h1>Update EmployeeGroup <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>