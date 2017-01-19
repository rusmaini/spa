			<?php
			$uri1 = $this->uri->segment(1);
			$uri2 = $this->uri->segment(2);
			$uri3 = $this->uri->segment(3);
			?>
			
			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li<?=($uri1=='dashboard')?' class="active"':''?>>
						<?=anchor('dashboard','
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						')?>

						<b class="arrow"></b>
					</li>
					<!-- Profail Pengguna -->
					<li<?=($uri1=='profail')?' class="active open"':''?>>
						<?=anchor('#','
							<i class="menu-icon glyphicon glyphicon-user"></i>
							<span class="menu-text"> Profail </span>
							<b class="arrow fa fa-angle-down"></b>
						',array('class'=>'dropdown-toggle'))?>
						
						<b class="arrow"></b>

						<ul class="submenu">
							<li<?=($uri1=='profail' && $uri2=='index')?' class="active"':''?>>
								<?=anchor('profail/index','
									<i class="menu-icon fa fa-caret-right"></i>
									Papar 
								')?>
								<b class="arrow"></b>
							</li>
							<li<?=($uri1=='profail' && $uri2=='edit')?' class="active"':''?>>
								<?=anchor('profail/edit','
									<i class="menu-icon fa fa-caret-right"></i>
									Kemaskini
								')?>
								<b class="arrow"></b>
							</li>
							<li<?=($uri1=='auth' && $uri2=='logout')?' class="active"':''?>>
								<?=anchor('auth/logout','
									<i class="menu-icon fa fa-caret-right"></i>
									Log Keluar
								')?>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<?php if($this->ion_auth->is_admin()): ?>
					<!-- ahli -->
					<li<?=($uri1=='ahli')?' class="active open"':''?>>
						<?=anchor('#','
							<i class="menu-icon fa fa-leaf"></i>
							<span class="menu-text"> Ahli Kekas</span>
							<b class="arrow fa fa-angle-down"></b>
						',array('class'=>'dropdown-toggle'))?>
						
						<b class="arrow"></b>

						<ul class="submenu">
							<li<?=($uri1=='ahli' && $uri2=='senarai')?' class="active"':''?>>
								<?=anchor('ahli/senarai','
									<i class="menu-icon fa fa-caret-right"></i>
									Senarai Ahli
								')?>
								<b class="arrow"></b>
							</li>
							<li<?=($uri1=='ahli' && $uri2=='edit')?' class="active"':''?>>
								<?=anchor('ahli/edit/0','
									<i class="menu-icon fa fa-caret-right"></i>
									Tambah Ahli
								')?>
								<b class="arrow"></b>
							</li>
							<li<?=($uri1=='ahli' && $uri2=='import')?' class="active"':''?>>
								<?=anchor('ahli/import/0','
									<i class="menu-icon fa fa-caret-right"></i>
									Import Ahli
								')?>
								<b class="arrow"></b>
							</li>
							<!-- jawatan -->
							<li<?=($uri1=='ahli' && ($uri2=='jawatan' || $uri2=='jawatan_edit'))?' class="active open"':''?>>
								<?=anchor('#','
									<i class="menu-icon fa fa-caret-right"></i>

									Jawatan
									<b class="arrow fa fa-angle-down"></b>
								',array('class'=>'dropdown-toggle'))?>
								
								<b class="arrow"></b>

								<ul class="submenu">
									<li<?=($uri1=='ahli' && $uri2=='jawatan')?' class="active"':''?>>
										<?=anchor('ahli/jawatan','
											<i class="menu-icon fa fa-list green"></i>
											Senarai Jawatan
										')?>

										<b class="arrow"></b>
									</li>
									<li<?=($uri1=='ahli' && $uri2=='jawatan_edit')?' class="active"':''?>>
										<?=anchor('ahli/jawatan_edit/0','
											<i class="menu-icon fa fa-pencil-square-o green"></i>
											Tambah Jawatan
										')?>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<!-- ptj -->
							<li<?=($uri1=='ahli' && ($uri2=='ptj' || $uri2=='ptj_edit'))?' class="active open"':''?>>
								<?=anchor('#','
									<i class="menu-icon fa fa-caret-right"></i>
									PTJ
									<b class="arrow fa fa-angle-down"></b>
								',array('class'=>'dropdown-toggle'))?>
								
								<b class="arrow"></b>

								<ul class="submenu">
									<li<?=($uri1=='ahli' && $uri2=='ptj')?' class="active"':''?>>
										<?=anchor('ahli/ptj','
											<i class="menu-icon fa fa-list green"></i>
											Senarai PTJ
										')?>

										<b class="arrow"></b>
									</li>
									<li<?=($uri1=='ahli' && $uri2=='ptj_edit')?' class="active"':''?>>
										<?=anchor('ahli/ptj_edit/0','
											<i class="menu-icon fa fa-pencil-square-o green"></i>
											Tambah PTJ
										')?>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					
					<!-- konfigurasi -->
					<li<?=($uri1=='setting')?' class="active open"':''?>>
						<?=anchor('#','
							<i class="menu-icon fa fa-cogs"></i>
							<span class="menu-text"> Konfigurasi </span>
							<b class="arrow fa fa-angle-down"></b>
						',array('class'=>'dropdown-toggle'))?>
						
						<b class="arrow"></b>

						<ul class="submenu">
							<li<?=($uri1=='setting' && ($uri2=='index' || $uri2==''))?' class="active"':''?>>
								<?=anchor('setting/','
									<i class="menu-icon fa fa-caret-right"></i>
									Tentang Sistem
								')?>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
					<!-- User -->
					<li<?=($uri1=='auth')?' class="active open"':''?>>
						<?=anchor('#','
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Pengguna </span>
							<b class="arrow fa fa-angle-down"></b>
						',array('class'=>'dropdown-toggle'))?>
						
						<b class="arrow"></b>

						<ul class="submenu">
							<li<?=($uri1=='auth' && ($uri2=='index') || $uri2=='')?' class="active"':''?>>
								<?=anchor('auth','
									<i class="menu-icon fa fa-caret-right"></i>
									Senarai Pengguna
								')?>
								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>
					<?php endif; ?>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>