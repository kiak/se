<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc')); ?>:</b>
	<?php echo CHtml::encode($data->desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_cash')); ?>:</b>
	<?php echo CHtml::encode($data->price_cash); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_point')); ?>:</b>
	<?php echo CHtml::encode($data->price_point); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('point_earn')); ?>:</b>
	<?php echo CHtml::encode($data->point_earn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('picture_path')); ?>:</b>
	<?php echo CHtml::encode($data->picture_path); ?>
	<br />

	*/ ?>

</div>