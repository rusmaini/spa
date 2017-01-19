<div class="row">
	<div class="col-lg-10 col-lg-offset-2">
				
		<h1><?php echo lang('create_user_heading');?></h1>
		<p><?php echo lang('create_user_subheading');?></p>
		
		<div id="infoMessage"><?php echo $message;?></div>
		
		<?php echo form_open("auth/create_user",array('class'=>'form-horizontal'));?>
		
			<div class="form-group">
			  	<label class="col-sm-2 control-label">
			  		<?php echo lang('create_user_fname_label', 'first_name');?>
			  	</label>
			    <div class="col-sm-6">
			    	<?php echo form_input($first_name);?>
			    </div>
		  	</div>
		  	
		  	<div class="form-group">
			  	<label class="col-sm-2 control-label">
			  		<?php echo lang('create_user_lname_label', 'last_name');?>
			  	</label>
			    <div class="col-sm-6">
			    	<?php echo form_input($last_name);?>
			    </div>
		  	</div>
		  	
		
			<?php
			if($identity_column!=='email') { ?>
				<div class="form-group">
					<label class="col-sm-2 control-label">
						<?= lang('create_user_identity_label', 'identity');?>
					</label>
					<div class="col-sm-6">
						<?php
						echo form_error('identity');
						echo form_input($identity);
						?>
					</div>
				</div> 
				<?php
			}
			?>
		  
		  	<div class="form-group">
			  	<label class="col-sm-2 control-label">
			  		<?php echo lang('create_user_company_label', 'company');?>
			  	</label>
			    <div class="col-sm-6">
			    	<?php echo form_input($company);?>
			    </div>
		  	</div>
		  	
		  	<div class="form-group">
			  	<label class="col-sm-2 control-label">
			  		<?php echo lang('create_user_email_label', 'email');?>
			  	</label>
			    <div class="col-sm-6">
			    	<?php echo form_input($email);?>
			    </div>
		  	</div>
		  	
		  	<div class="form-group">
			  	<label class="col-sm-2 control-label">
			  		<?php echo lang('create_user_phone_label', 'phone');?>
			  	</label>
			    <div class="col-sm-6">
			    	<?php echo form_input($phone);?>
			    </div>
		  	</div>
		     
			<div class="form-group">
			  	<label class="col-sm-2 control-label">
			  		<?php echo lang('create_user_password_label', 'password');?>
			  	</label>
			    <div class="col-sm-6">
			    	<?php echo form_input($password);?>
			    </div>
		  	</div>
		  	
		  	<div class="form-group">
			  	<label class="col-sm-2 control-label">
			  		<?php echo lang('create_user_password_confirm_label', 'password_confirm');?>
			  	</label>
			    <div class="col-sm-6">
			    	<?php echo form_input($password_confirm);?>
			    </div>
		  	</div>
		
			<div class="form-group">
			  	<label class="col-sm-2 control-label">
			  		
			  	</label>
			    <div class="col-sm-6">
			    	<?php echo form_submit('submit', lang('create_user_submit_btn'),'class="btn btn-default"');?>
			    </div>
		  	</div>
		
		<?php echo form_close();?>
	</div>
</div>
