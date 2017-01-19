<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		
		#Settings									
		$this->data = $this->setting;
		if (!$this->ion_auth->logged_in()) redirect('auth/login', 'refresh');
		
		$id = $this->session->userdata('user_id');
		$user = $this->ion_auth->user($id)->row();
		$groups=$this->ion_auth->groups()->result_array();
		$currentGroups = $this->ion_auth->get_users_groups($id)->result();
		
		// pass the user to the view
		$this->data['user'] = $user;
		$this->data['groups'] = $groups;
		$this->data['currentGroups'] = $currentGroups;
	}
	
	public function index()
	{
		$this->data['content'] = 'dashboard/index';
		$this->load->view('template/index',$this->data);
	}
}
