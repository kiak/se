




<div style="clear:both ;margin-top:60px;" />
<h1> <?= $product->name ?></h1>
<div class="row" >
<div class="span4" >
<a href="#" class="thumbnail" rel="tooltip" data-title="Tooltip">
        <img src="http://placehold.it/350x350" alt="">
    </a>
</div>
<div class="span5" >
	<div style="padding:20px;border-radius:10px;background-color:whitesmoke;">
<p> <?= $product->desc ?></p>
    <center>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Add to cart',
    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'large', // null, 'large', '' or 'mini'
)); ?>
</center>
</div>

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
</div><!-- row -->
