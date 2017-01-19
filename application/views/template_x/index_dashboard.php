
<?php $this->load->view('template/header') ?>
	<div class="container">
		<br />
		<?=$this->session->flashdata('notis') ?>
		
		<div class="row">
			<div class="col-lg-3">
				<?php $this->load->view('template/sidebar') ?>
			</div>
			<div class="col-lg-9">
				<!-- Main Content -->
				<?php $this->load->view($content) ?>
			</div>
		</div>
		
	</div>
	
<?php $this->load->view('template/footer') ?>

