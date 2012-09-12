<?php
/* @var $this EmployeeGroupController */
/* @var $model EmployeeGroup */

$this->breadcrumbs=array(
	'Employee Groups'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List EmployeeGroup', 'url'=>array('index')),
	array('label'=>'Create EmployeeGroup', 'url'=>array('create')),
	array('label'=>'Update EmployeeGroup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EmployeeGroup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmployeeGroup', 'url'=>array('admin')),
);
?>

<h1>View EmployeeGroup #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'desc',
	),
)); ?>
