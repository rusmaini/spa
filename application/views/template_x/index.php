
<?php $this->load->view('template/header') ?>
	<div class="container">
		<br />
		<?=$this->session->flashdata('notis') ?>
		<!-- Main Content -->
		<?php $this->load->view($content) ?>
		
	</div>
	
<?php $this->load->view('template/footer') ?>

