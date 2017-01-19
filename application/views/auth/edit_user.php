<div class="row">
	<div class="col-lg-10 col-lg-offset-2">
				
		
		<h1><?php echo lang('edit_user_heading');?></h1>
		<p><?php echo lang('edit_user_subheading');?></p>
		
		<div id="infoMessage"><?php echo $message;?></div>
		
		<?php echo form_open(uri_string(),array('class'=>'form-horizontal'));?>
		
		
			<div class="form-group">
			  	<label class="col-sm-2 control-label">
			  		<?php echo lang('edit_user_fname_label', 'first_name');?>
			  	</label>
			    <div class="col-sm-6">
			    	<?php echo form_input($first_name);?>
			    </div>
		  	</div>
		  	
			<div class="form-group">
			  	<label class="col-sm-2 control-label">
			  		<?php echo lang('edit_user_lname_label', 'last_name');?>
			  	</label>
			    <div class="col-sm-6">
		            <?php echo form_input($last_name);?>			    	
			    </div>
		  	</div>
		  	
			<div class="form-group">
			  	<label class="col-sm-2 control-label">
			  		<?php echo lang('edit_user_company_label', 'company');?>
			  	</label>
			    <div class="col-sm-6">
		            <?php echo form_input($company);?>
			    </div>
		  	</div>
		  	
			<div class="form-group">
			  	<label class="col-sm-2 control-label">
			  		<?php echo lang('edit_user_phone_label', 'phone');?>
			  	</label>
			    <div class="col-sm-6">
		            <?php echo form_input($phone);?>
			    </div>
		  	</div>
		  	
			<div class="form-group">
			  	<label class="col-sm-2 control-label">
			  		<?php echo lang('edit_user_password_label', 'password');?>
			  	</label>
			    <div class="col-sm-6"> 
		            <?php echo form_input($password);?>
			    </div>
		  	</div>
		  	
			<div class="form-group">
			  	<label class="col-sm-2 control-label">
			  		<?php echo lang('edit_user_password_confirm_label', 'password_confirm');?>
			  	</label>
			    <div class="col-sm-6">
		            <?php echo form_input($password_confirm);?>
			    </div>
		  	</div>
		  	

		    <?php if ($this->ion_auth->is_admin()): ?>
	    	<h3><?php echo lang('edit_user_groups_heading');?></h3>
			<div class="form-group">
			  	<label class="col-sm-2 control-label">
			  		
			  	</label>
			    <div class="col-sm-6">
		            <?php foreach ($groups as $group):?>
		              <label class="checkbox">
		              <?php
		                  $gID=$group['id'];
		                  $checked = null;
		                  $item = null;
		                  foreach($currentGroups as $grp) {
		                      if ($gID == $grp->id) {
		                          $checked= ' checked="checked"';
		                      break;
		                      }
		                  }
		              ?>
		              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
		              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
		              </label>
		          <?php endforeach?>
			    </div>
		  	</div>
		          
		    <?php endif ?>
		
			<div class="form-group">
			  	<label class="col-sm-2 control-label">
			  		
			  	</label>
			    <div class="col-sm-6">
			    	 <?php echo form_hidden('id', $user->id);?>
				    <?php echo form_hidden($csrf); ?>
				
				    <?php echo form_submit('submit', lang('edit_user_submit_btn'),'class="btn btn-default"');?>
			    </div>
		  	</div>
		
		<?php echo form_close();?>
	</div>
</div>
