<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends MY_Controller {

    

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
        $page = 'About Us';

        $this->set_activepage($page);
        $this->set_bc($page,'home/aboutus');
        
        $this->load->view($this->template_dir.'page/about_us', $this->data);
        
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
	
	public function seedbed()
    {
        $page = 'Test';
        //echo $this->aa_lib->aa("AA Lib");
        $this->set_activepage($page);
        $this->set_bc($page,'home/test');
        $this->unset_template();
		$this->data['projects'] = $this->aa_model->project_get_data();
		//var_dump($this->data['projects']);
        $this->load->view('bootstrapt1/project', $this->data);
        
    }
	
	public function sbp()
    {
        $page = 'Test';
        //echo $this->aa_lib->aa("AA Lib");
        $this->set_activepage($page);
        $this->set_bc($page,'home/test');
        $this->unset_template();
		if (empty($_GET['te']) || empty($_GET['hu']) || empty($_GET['ph']) ||  empty($_GET['d']) ){
			redirect('project/seedbed', 'refresh');
		}
		//http://localhost/ci_exquiso/project/sbp?te=25.36&hu=49.21&li=300.21&ph=8.58&sm=186.32&wl=30&d=5
		$data = array(
				'temperature' => $this->input->get('te'),
				'humidity' => $this->input->get('hu'),
				'phlevel' => $this->input->get('ph'),
				'lightintensity' => $this->input->get('li'),
				'soilmoist' => $this->input->get('sm'),
				'waterlevel' => $this->input->get('wl'),
				'day' => $this->input->get('d'),

			);
		var_dump($data);
		$result = $this->aa_model->project_add_data($data);
		echo $result;
		//var_dump($this->data['projects']);
        //$this->load->view('bootstrapt1/project', $this->data);
        
    }
    
    
}