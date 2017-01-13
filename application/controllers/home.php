<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	

	public function __construct(){

		parent::__construct();
		$this->load->database();
		$this->load->library(array('form_validation','aa_lib'));
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
		$page = 'Home';

		$this->set_activepage($page);
		$this->set_bc($page,'home');
		

		$this->data['posts'] = $this->aa_model->blog_view_all();
		
		$this->load->view($this->template_dir.'page/home', $this->data);
		
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