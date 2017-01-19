<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}
		
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		
		#Settings									
		$this->data = $this->setting;
		if (!$this->ion_auth->logged_in()) redirect('auth/login', 'refresh');
	}
	
	//$id=0 insert; $id!=0 update. (add & update guna borang yang sama)
	function index()
	{		
		#Settings									
		$this->data = $this->setting;
			
		if (!$_POST):
			$this->data['setting']	= $this->Msetting->get_all();
			$this->data['content']	= 'setting/edit';
			$this->load->view('template/index',$this->data);
		else:
			//$set = $this->input->post('seting');
			/*
			echo '<pre>';
			print_r($_POST);
			echo '</pre>';
			*/
			foreach ($_POST as $key => $value):
				$this->Msetting->update($key,$value);
			endforeach;
			
			$this->session->set_flashdata('notice', '<p class="alert alert-success">Data berjaya dikemaskini..</p>');	
			
			redirect('setting');
		endif;
	}

}

/* End of file module.php */
/* Location: ./application/controllers/module.php */