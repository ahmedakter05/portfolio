<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends MY_Controller {

	

	public function __construct(){

		parent::__construct();
		$this->load->database();
		$this->load->library(array('aa_lib'));
		$this->load->helper(array());
		$this->lang->load('ion_auth');
		
		$this->_init();
		
		//$this->load->model('news_model');
		
	} 
	
	private function _init(){

		$this->output->set_template('exquiso_theme');
					
	}
	
	public function Index()
	{
		$page = 'Error';
		$this->set_activepage($page);
		//Slider Code goes here
		
		//Title code goes here
		
		$this->set_bc($page,'home/error');
		
		
		$this->load->view($this->template_dir.'page/error_404', $this->data);
		
	}
	
	public function test()
	{
		$page = 'Test';
		echo $this->aa_lib->aa("AA Lib");
		$this->set_activepage($page);
		$this->set_bc($page,'home/test');
		$this->unset_template();
		//$this->load->view($this->template_dir.'blog/blog_index', $this->data);
		
	}
	
	
}