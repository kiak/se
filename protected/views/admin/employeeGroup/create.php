<?php
/* @var $this EmployeeGroupController */
/* @var $model EmployeeGroup */

$this->breadcrumbs=array(
	'Employee Groups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EmployeeGroup', 'url'=>array('index')),
	array('label'=>'Manage EmployeeGroup', 'url'=>array('admin')),
);
?>

<h1>Create EmployeeGroup</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>