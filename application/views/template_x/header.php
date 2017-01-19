<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=(isset($title))? $title.' &mdash; ':''; ?> <?=$site_name?>. <?=$slogan?></title>
    <meta name="description" content="<?=$slogan?>">
    <meta name="author" content="Crockcms">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
	<!-- jQuery -->
    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?=base_url()?>bootstrap/js/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <link rel="stylesheet" href="<?=base_url()?>assets/jquery-ui/jquery-ui.min.css">
	<script src="<?=base_url()?>assets/jquery-ui/jquery-ui.min.js"></script>
	<!-- jQuery UI + TimePicker -->
    <link rel="stylesheet" href="<?=base_url()?>assets/jquery-ui/jquery-ui-timepicker.css">
	<script src="<?=base_url()?>assets/jquery-ui/jquery-ui-timepicker.js"></script>
	<!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>bootstrap/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?=base_url()?>bootstrap/css/bootswatch.min.css">
    <!-- guna themes -->
    <link rel="stylesheet" href="<?=base_url()?>themes/<?=$theme?>/css/bootstrap.css" media="screen">
    <!-- kalendar -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/kalendar.css" media="screen">
    
    <!-- wallscript -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/profile.css" media="screen">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/wallscript.css" media="screen">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
 	<link rel="icon" href="<?=base_url()?>icon.png" sizes="32x32" />
 	<style>
 		.item {
		    width: 200px;
		    float: left;
		}
		.item img {
		    display: block;
		    width: 100%;
		}
 	</style>
  </head>
  <body>
  	
	<?php
	$uri1 = $this->uri->segment(1,'');
	$uri2 = $this->uri->segment(2,'');
	?>
  	<?=$this->config->item('site_title', 'my')?>
  	<!-- Nav Bar - Header -->
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<?=anchor('',$site_name,array('class'=>'navbar-brand'))?>				
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-collapse collapse" id="navbar-main">
				<!-- Menu Left - Main Menu -->
				<ul class="nav navbar-nav">
					<!--
					<li <?=($uri1=='bilik' && ($uri2=='' || $uri2=='v'))? 'class="active"':''; ?>>
						<?=anchor('bilik/','Penginapan')?>
					</li>
					<li <?=($uri1=='bilik' && $uri2=='cari')? 'class="active"':''; ?>>
						<?=anchor('bilik/cari','Carian')?>
					</li>
					<li <?=($uri1=='bilik' && $uri2=='panduan')? 'class="active"':''; ?>>
						<?=anchor('bilik/panduan','Panduan &amp; Manual Pengguna')?>
					</li>
					-->
					
					<li>
						<?=anchor('alumni/institusi_cari','Institusi')?>
					</li>
					
					
				</ul>
				
				<!-- Menu Right -->
				<ul class="nav navbar-nav navbar-right">
					<?php if(!$this->ion_auth->logged_in()):?>
						<li <?=($uri1=='auth' && $uri2=='signup')? 'class="active"':''; ?>><?= anchor('auth/signup','<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Daftar')?></li>
						<li><?= anchor('auth/login','<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Log Masuk')?></li>
					<?php else: ?>
						<!--
						<li <?=($uri1=='bilik' && $uri2=='tempahan')? 'class="active"':''; ?>><?= anchor('bilik/tempahan','My Tempahan')?></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Tuan Rumah <span class="caret"></span></a>
							<ul class="dropdown-menu" aria-labelledby="themes">
								<li class="disabled"><a>Penginapan</a></li>
								<li><?= anchor('dashboard/akaun','<span class="glyphicon glyphicon-link" aria-hidden="true"></span>  Alamat Web')?></li>
								<li><?= anchor('dashboard/mymaster','<span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Urus Penginapan')?></li>
								<li class="divider"></li>
								<li class="disabled"><a>Tempahan</a></li>
								<li><?= anchor('dashboard/mybilik/tempahan_baru','<span class="glyphicon glyphicon-check" aria-hidden="true"></span> Tempahan Baru')?></li>
								<li><?= anchor('dashboard/mybilik/tempahan','<span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>  Urus Tempahan')?></li>
								<li><?= anchor('dashboard/kalendar','<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>  Kalendar')?></li>
								<li><?= anchor('dashboard/mybilik/sekat','<span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span>  Sekat Tarikh')?></li>
							</ul>
						</li>
						-->
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"> My Alumni <span class="caret"></span></a>
							<ul class="dropdown-menu" aria-labelledby="themes">
								<li><?= anchor('alumni/my','<span class="glyphicon glyphicon-education" aria-hidden="true"></span> Urus Institusi')?></li>
								<li><?= anchor('alumni/inbox','<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Inbox')?></li>
							</ul>
						</li>
						<?php if($this->ion_auth->is_admin()): ?>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Admin <span class="caret"></span></a>
							<ul class="dropdown-menu" aria-labelledby="themes">
								<li class="disabled"><a>Admin</a></li>
								<li><?= anchor('auth/','<span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Urus Pengguna')?></li>
								<li><?= anchor('setting/','<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>  Konfigurasi Sistem')?></li>
								<li class="divider"></li>
								<li class="disabled"><a>Urus Alumni</a></li>
								<li><?= anchor('dashboard/alumni/institusi','<span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>  Urus Institusi')?></li>
							</ul>
						</li>
						<?php endif; ?>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><?=$this->session->userdata('identity')?> <span class="caret"></span></a>
							<ul class="dropdown-menu" aria-labelledby="themes">
								<li><?= anchor('profail/','<span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Papar Profail ')?></li>
								<li><?= anchor('profail/edit/','<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  Kemaskini')?></li>
								<li class="divider"></li>
								<li><?= anchor('auth/logout','<span class="glyphicon glyphicon-off" aria-hidden="true"></span> Log Keluar')?></li>
							</ul>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
