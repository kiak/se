<?php
/* @var $this CartController */

$this->breadcrumbs=array(
	'Cart',
);
?>
<div style="clear:both ;margin-top:60px;" />
<h1>Your cart</h1>
<div class="row" >
<div class="span9" >
<table class="items table">
<thead>
<tr>
<th id="yw26_c0">#</th><th id="yw26_c1">Item name</th><th id="yw26_c2">Amount</th><th id="yw26_c3">Price</th><th class="button-column" id="yw26_c4">&nbsp;</th></tr>
</thead>
<tbody>
<tr class="odd"><td style="width: 60px">1</td><td>itemname</td><td>1</td><td>10000 point</td><td class="button-column">  </td></tr>
<tr class="even"><td style="width: 60px">2</td><td>itemname</td><td>2</td><td>100 B</td><td class="button-column"> </td></tr>
<tr class="odd"><td style="width: 60px">3</td><td>itemname</td><td>1</td><td>2000 B</td><td class="button-column"> </td></tr>
<tr class="odd"><td style="width: 60px"> </td><td> This payment will earn</td><td> 21</td><td>  point</td><td class="button-column"> </td></tr>

<tr class="odd"><td style="width: 60px">Total </td><td> </td><td> </td><td>2100 B + 10000 point</td><td class="button-column"> </td></tr>
</tbody>
</table>


</div>

<div class="span3 ">
		<div id="sidebar">
			<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    'items'=>array(
        array('label'=>'Total'),
        array('label'=>'2100 B + 10000 point', 'url'=>'#'),
        '---',
       	array('label'=>'shift to'),
       	array('label'=>'Phayathai (click to change)', 'url'=>'#', ),
       	'---',
        array('label'=>'Check Out', 'url'=>'#', 'active'=>true),
    ),
)); ?>
		</div><!-- sidebar -->
</div><!-- row -->
