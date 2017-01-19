
<div id="forgot-box" class="forgot-box widget-box no-border visible">
	<div class="widget-body">
		<div class="widget-main">
			<h4 class="header red lighter bigger">
				<i class="ace-icon fa fa-key"></i>
				<?php echo lang('forgot_password_heading');?>
			</h4>

			<div class="space-6"></div>
			<p>
				<?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?>
			</p>
			<div id="infoMessage"><?php echo $message;?></div>
			
			<?php echo form_open("auth/forgot_password",array('class'=>'form-horizontal'));?>
				<fieldset>
				
					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<?php echo form_input($identity);?>
							<i class="ace-icon fa fa-envelope"></i>
						</span>
					</label>

					<div class="clearfix">
						<?php echo form_submit('submit', lang('forgot_password_submit_btn'),'class="btn width-35 pull-right btn btn-sm btn-danger"');?>
					</div>
				</fieldset>
			<?php echo form_close();?>
		</div><!-- /.widget-main -->

		<div class="toolbar center">
			<?=anchor('auth/login','Kembali ke login
				<i class="ace-icon fa fa-arrow-right"></i>',array('class'=>'back-to-login-link'))?>
			
		</div>
	</div><!-- /.widget-body -->
</div><!-- /.forgot-box -->

