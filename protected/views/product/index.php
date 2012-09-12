<?php
/* @var $this ProductController */

$this->breadcrumbs=array(
	'Catalog',
);
$dataProvider = new SDataProvider("grid",$product);

?>

<?php $this->widget('bootstrap.widgets.TbThumbnails', array(
    'dataProvider'=>$dataProvider,
    'template'=>"{items}\n{pager}",
    'itemView'=>'_thumb',
)); ?>