<h1><?php echo lang('create_group_heading');?></h1>
<p><?php echo lang('create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group",array('class'=>'form-horizontal'));?>

	<div class="form-group">
	  	<label class="col-sm-2 control-label">
	  		<?php echo lang('create_group_name_label', 'group_name');?>
	  	</label>
	    <div class="col-sm-4">
	    	<?php echo form_input($group_name);?>
	    </div>
  	</div>
  	
  	<div class="form-group">
	  	<label class="col-sm-2 control-label">
	  		<?php echo lang('create_group_desc_label', 'description');?>
	  	</label>
	    <div class="col-sm-4">
	    	<?php echo form_input($description);?>
	    </div>
  	</div>
  	
  	<div class="form-group">
	  	<label class="col-sm-2 control-label">
	  		
	  	</label>
	    <div class="col-sm-4">
	    	<?php echo form_submit('submit', lang('create_group_submit_btn'),'class="btn btn-default"');?>
	    </div>
  	</div>

<?php echo form_close();?>