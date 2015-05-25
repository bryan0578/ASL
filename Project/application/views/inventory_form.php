<?php echo validation_errors(); ?>
<?php
$attributes = array('class' => 'form-horizontal');
$labelClass = array('class' => 'col-md-4 control-label');
$inputClass = array('class' => 'form-control input-md');
$item_name = array('name' => 'item_name',
                   'id' => 'item_name',
                   'class' => 'form-control input-md');

$item_price = array('name' => 'item_price',
                   'id' => 'item_price',
                   'class' => 'form-control input-md');

$item_sale_price = array('name' => 'item_sale_price',
                   'id' => 'item_sale_price',
                   'class' => 'form-control input-md');


$item_stock = array('name' => 'item_stock',
                   'id' => 'item_stock',
                   'class' => 'form-control input-md');
?>
<h2>Add Item to Inventory</h2>
<?php echo form_open('welcome/add',$attributes); ?>
    <div class="form-group">
    	<?php echo form_label('Item Name', 'item_name', $labelClass); ?>
    	<div class="col-md-8">
        	<?php echo form_input($item_name); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Item Price', 'item_price', $labelClass); ?>
        <div class="col-md-8">
        	<?php echo form_input($item_price); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Item Sale Price', 'item_sale_price',$labelClass); ?>
        <div class="col-md-8">
        	<?php echo form_input($item_sale_price); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Item Stock', 'item_stock',$labelClass); ?>
        <div class="col-md-8">
        	<?php echo form_input($item_stock); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="button"></label>
         <div class="col-md-4">
        	<?php echo form_submit('save', 'Save'); ?>
        </div>
    </div>
<?php echo form_close(); ?>
