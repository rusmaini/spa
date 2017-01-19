<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
				
		
		<h1>Profail Pengguna</h1>
		<p></p>
		
		<table class="table">
			<tr>
				<th><?php echo lang('edit_user_fname_label', 'first_name');?></th><td><?php echo $user->first_name?></td>
			</tr>
			<tr>
				<th><?php echo lang('edit_user_lname_label', 'last_name');?></th><td><?php echo $user->last_name?></td>	
			</tr>
			<tr>
				<th><?php echo lang('edit_user_company_label', 'company');?></th><td><?php echo $user->company?></td>
			</tr>
			<tr>
				<th><?php echo lang('edit_user_phone_label', 'phone');?></th><td><?php echo $user->phone?></td>
			</tr>
			<tr>
				<th><?php echo lang('edit_user_email_label', 'email');?></th><td><?php echo $user->email?></td>
			</tr>			
		</table>
		
		<a href="javascript:window.history.back();" class="btn btn-default">&larr; Kembali</a>
	</div>
</div>
