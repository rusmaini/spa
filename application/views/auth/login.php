
<div id="login-box" class="login-box visible widget-box no-border">
	<div class="widget-body">
		<div class="widget-main">
			<h4 class="header blue lighter bigger">
				<i class="ace-icon fa fa-coffee green"></i>
				Masukkan ID &amp; Kata Laluan
			</h4>

			<div class="space-6"></div>

			<?=$this->session->flashdata('notis')?>
			<div id="infoMessage"><?php echo $message;?></div>
			<?php echo form_open("auth/login",array('class'=>'form-horizontal'));?>
				<fieldset>
					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<?php echo form_input($identity);?>
							<i class="ace-icon fa fa-user"></i>
						</span>
					</label>
			
					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<?php echo form_input($password);?>
							<i class="ace-icon fa fa-lock"></i>
						</span>
					</label>
			
					<div class="space"></div>
			
					<div class="clearfix">
						
						<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
							<i class="ace-icon fa fa-key"></i>
							<span class="bigger-110">Login</span>
						</button>
						
					</div>
			
					<div class="space-4"></div>
				</fieldset>
			<?=form_close()?>
				
		</div><!-- /.widget-main -->

		<div class="toolbar clearfix">
			<div>
				<?=anchor('auth/forgot_password','<i class="ace-icon fa fa-arrow-left"></i> '.lang('login_forgot_password'),array('class'=>'forgot-password-link'))?>
			</div>
			<div>
				<?=anchor('auth/signup','<i class="ace-icon fa fa-arrow-right"></i> Daftar',array('class'=>'user-signup-link'))?>
			</div>
		</div>
	</div><!-- /.widget-body -->
</div><!-- /.login-box -->



		
		



