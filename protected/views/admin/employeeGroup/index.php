<?php
/* @var $this EmployeeGroupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employee Groups',
);

$this->menu=array(
	array('label'=>'Create EmployeeGroup', 'url'=>array('create')),
	array('label'=>'Manage EmployeeGroup', 'url'=>array('admin')),
);
?>

<h1>Employee Groups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
