<?php
/* @var $this CartController */

$this->breadcrumbs=array(
	'Package #4124-2321',
);
?>
<div style="clear:both ;margin-top:60px;" />
<h1>Package #4124-2321</h1>
<div class="row" >
<div class="span9" >
<table class="items table">
<thead>
<tr>
<th id="yw26_c0">#</th><th id="yw26_c1">Item name</th><th id="yw26_c2">Amount</th><th id="yw26_c3"></th><th class="button-column" id="yw26_c4">&nbsp;</th></tr>
</thead>
<tbody>
<tr class="odd"><td style="width: 60px">1</td><td>itemname</td><td>1</td><td></td><td class="button-column">  </td></tr>
<tr class="even"><td style="width: 60px">2</td><td>itemname</td><td>2</td><td></td><td class="button-column"> </td></tr>
<tr class="odd"><td style="width: 60px">3</td><td>itemname</td><td>1</td><td></td><td class="button-column"> </td></tr>
 
<tr class="odd"><td style="width: 60px">Total </td><td> </td><td> 4</td><td></td><td class="button-column"> </td></tr>
</tbody>
</table>


</div>

<div class="span3 ">
		<div id="sidebar">
			<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    'items'=>array(
       	array('label'=>'shift to'),
       	array('label'=>'1234 Phayathai Rd. Pratumwan. Bangkok 10330 ', 'url'=>'#', ),
       	'---',
        array('label'=>'Next', 'url'=>'#', 'active'=>true),
        array('label'=>'Skip', 'url'=>'#'),
    ),
)); ?>
		</div><!-- sidebar -->
</div><!-- row -->
