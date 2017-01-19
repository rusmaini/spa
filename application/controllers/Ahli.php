<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ahli extends MY_Controller {

	function __construct()
	{
		parent::__construct();

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		
		#Settings									
		$this->data = $this->setting;
		if (!$this->ion_auth->logged_in()) redirect('auth/login', 'refresh');
		
	}
	
	public function index()
	{
		$this->data['content'] = 'ahli/index';
		$this->load->view('template/index',$this->data);
	}
	
	function senarai()
	{
		//pagination
		$page_mula	 			= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->data['page'] 	= $page_mula;
		
		//pagination
		$config = array();
        $config["base_url"] 	= base_url() . "ahli/senarai/";
        $config["total_rows"] 	= $data['direktori_jumlah'] = $this->Mahli->count_all();
        $config["per_page"] 	= $this->setting['per_page'];
        $config["uri_segment"] 	= 3;
		
		//pagination css
		$config['query_string_segment'] = 'page';
		$config['full_tag_open'] = '<ul class="pagination pull-right no-margin">';
		$config['full_tag_close'] = '</ul><!--pagination-->';
		$config['first_link'] = '&laquo; Awal';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Akhir &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Berikut &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Kembali';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		
        $this->pagination->initialize($config);
		$this->data["links"] 	= $this->pagination->create_links();
			
		$this->data['ahli'] = $this->Mahli->get_all($config["per_page"],$this->data['page']);
		$this->data['content'] = 'ahli/senarai';
		$this->load->view('template/index',$this->data);
	}
	
	function papar($id=0)
	{
		$this->data['content'] = 'ahli/papar';
		$this->load->view('template/index',$this->data);
	}
	
	function edit($id=0)
	{
		$this->data['content'] = 'ahli/edit';
		$this->load->view('template/index',$this->data);
	}
	
	function jawatan()
	{
		$this->data['content'] = 'ahli/jawatan';
		$this->load->view('template/index',$this->data);
	}
	
	function jawatan_edit($id=0)
	{
		$this->data['content'] = 'ahli/jawatan_edit';
		$this->load->view('template/index',$this->data);
	}
	
	function ptj()
	{
		$this->data['content'] = 'ahli/ptj';
		$this->load->view('template/index',$this->data);
	}
	
	function ptj_edit($id=0)
	{
		$this->data['content'] = 'ahli/ptj_edit';
		$this->load->view('template/index',$this->data);
	}
	
	
}
