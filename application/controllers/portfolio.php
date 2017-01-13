<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends MY_Controller {

	

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
		

		$page = 'Portfolio';
		$this->set_activepage($page);
		$this->set_bc($page,'home/portfolio');
		
		$this->data['posts'] = $this->aa_model->blog_view_all_new();
		//var_dump($this->data['posts']);
		//var_dump($this->data['posts']['comments']);
		
		$this->load->view($this->template_dir.'portfolio/portfolio_index', $this->data);
		
	}

	public function Blog()
	{
		
		
		
	}
	
	
	
}