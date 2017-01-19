<div class="tab-content no-border padding-24">
<div id="home" class="tab-pane in active">
<div class="row">
<div class="col-xs-12 col-sm-3 center">
	<span class="profile-picture">
		<img class="editable img-responsive" id="avatar2" src="<?= $this->gravatar->get_gravatar($user->email); ?>?s=150" />
	</span>

	<div class="space space-4"></div>
	<!--
	<a href="#" class="btn btn-sm btn-block btn-success">
		<i class="ace-icon fa fa-plus-circle bigger-120"></i>
		<span class="bigger-110">Add as a friend</span>
	</a>

	<a href="#" class="btn btn-sm btn-block btn-primary">
		<i class="ace-icon fa fa-envelope-o bigger-110"></i>
		<span class="bigger-110">Send a message</span>
	</a>
	-->
</div><!-- /.col -->
<div class="col-xs-12 col-sm-9">
	<h4 class="blue">
		<span class="middle"><?=anchor($user->username,$user->first_name.' '.$user->last_name);?> </span>

	</h4>

	<div class="profile-user-info">
		<div class="profile-info-row">
			<div class="profile-info-name"> Username </div>
			<div class="profile-info-value">
				<span><?=$user->username?></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name"> Company </div>
			<div class="profile-info-value">
				<span><?= $user->company;?></span>
			</div>
		</div>

		<div class="profile-info-row">
			<div class="profile-info-name"> Telephone </div>
			<div class="profile-info-value">
				<span><?= $user->phone;?></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name"> Joined </div>
			<div class="profile-info-value">
				<span><?=date('d/m/Y',$user->created_on)?></span>
			</div>
		</div>

		<div class="profile-info-row">
			<div class="profile-info-name"> Last Online </div>
			<div class="profile-info-value">
				<span><?=date('d/m/Y H:i a',$user->last_login)?></span>
			</div>
		</div>
	</div>

	<div class="hr hr-8 dotted"></div>

	
</div><!-- /.col -->
</div>
</div>
</div>

