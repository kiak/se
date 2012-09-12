<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
	<div class="span9">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span3 ">
		<div id="sidebar">
			<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    'items'=>array(
        array('label'=>'Home', 'url'=>'#', 'active'=>true),
        array('label'=>'Profile', 'url'=>'#'),
        array('label'=>'Recent' ),
        array('label'=>'เครื่องทำความสะอาด', 'url'=>'#'),
        array('label'=>'เครื่องเป่าผม', 'url'=>'#'),
        array('label'=>'Catagory'),
        array('label'=>'เครื่องใช้ไฟฟ้า', 'url'=>'#'),
        array('label'=>'เครื่องเขียน', 'url'=>'#'),
        array('label'=>'เครื่องออกกำลังกาย', 'url'=>'#'),
        array('label'=>'เฟอร์นิเจอร์ตกแต่ง', 'url'=>'#'),
        array('label'=>'อุปกรณ์คอมพิวเตอร์', 'url'=>'#'),
    ),
)); ?>
		</div><!-- sidebar -->
	</div>
</div>
<?php $this->endContent(); ?>