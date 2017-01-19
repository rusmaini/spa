<div id="signup-box" class="signup-box widget-box no-border visible">
	<div class="widget-body">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo lang('create_user_heading');?></h3>
			</div>
	  		<div class="panel-body">
	  			<p><?php echo lang('create_user_subheading');?></p>
	  			<div id="infoMessage"><?php echo $message;?></div>
		
				<?php echo form_open("auth/signup",array('class'=>'form-horizontal'));?>
					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<?php echo lang('create_user_fname_label', 'first_name');?>
							<?php echo form_input($first_name);?>
						</span>
					</label>
					
					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<?php echo lang('create_user_lname_label', 'last_name');?>
							<?php echo form_input($last_name);?>
						</span>
					</label>
					
					
					<?php
					if($identity_column!=='email') { ?>
						
					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<?= lang('create_user_identity_label', 'identity');?>
							<?php
								echo form_error('identity');
								echo form_input($identity);
								?>
						</span>
					</label>
						<?php
					}
					?>
				  	
				  	
					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<?php echo lang('create_user_company_label', 'company');?>
							<?php echo form_input($company);?>
						</span>
					</label>
					
					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<?php echo lang('create_user_email_label', 'email');?>
							<?php echo form_input($email);?>
						</span>
					</label>
					
					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<?php echo lang('create_user_phone_label', 'phone');?>
							<?php echo form_input($phone);?>
						</span>
					</label>
					
					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<?php echo lang('create_user_password_label', 'password');?>
							<?php echo form_input($password);?>
						</span>
					</label>
					
				
					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<?php echo lang('create_user_password_confirm_label', 'password_confirm');?>
							<?php echo form_input($password_confirm);?>
						</span>
					</label>
					
				  	<div class="space"></div>
			
					<div class="clearfix">
						
						<?php echo form_submit('submit', lang('create_user_submit_btn'),'class="width-45 pull-right btn btn-sm btn-primary"');?>
						
					</div>
					
					
					<div class="space-4"></div>
				<?php echo form_close();?>
	  		</div>
  		</div>

		<div class="toolbar center">
			<?=anchor('auth/login','Kembali ke login
				<i class="ace-icon fa fa-arrow-right"></i>',array('class'=>'back-to-login-link'))?>
			
		</div>
	</div><!-- /.widget-body -->
</div><!-- /.signup-box -->



