<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<?=anchor('','
						<small>
							<i class="fa fa-leaf"></i>
							'.$site_name.'
						</small>
					',array('class'=>'navbar-brand'))?>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						
						<?php if(!$this->ion_auth->logged_in()):?>
							
						<?php else: ?>
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?= $this->gravatar->get_gravatar($this->session->userdata('email')); ?>?s=150" />
								<span class="user-info">
									<small>Selamat datang,</small>
									<?=$this->session->userdata('identity')?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								
								<li>
									<?=anchor('profail/index','
										<i class="ace-icon fa fa-user"></i>
										Profail
									')?>
								</li>

								<li class="divider"></li>

								<li>
									<?=anchor('auth/logout','
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									')?>
								</li>
							</ul>
						</li>
						<?php endif; ?>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>