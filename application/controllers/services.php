<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MY_Controller {

	

	public function __construct(){

		parent::__construct();
		$this->load->database();
		$this->load->library(array());
		$this->load->helper(array());

		//$this->lang->load('clients');
		
		$this->_init();
		
		//$this->load->model('news_model');
		
	} 
	
	private function _init(){

		$this->output->set_template('exquiso_theme');
					
	}
	
	public function Index()
	{
		$page = 'Services';
		$this->set_activepage($page);
		$this->set_bc($page,'home/services');
		
		$this->load->view($this->template_dir.'services/services_index', $this->data);
		
	}

	
}