<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apps extends MY_Controller {

    

    public function __construct(){

        parent::__construct();
        $this->load->database();
        $this->load->library(array('aa_lib', 'form_validation'));
        $this->load->helper(array('form'));
        $this->lang->load('ion_auth');
        
        $this->_init();
        
        //$this->load->model('news_model');
        
    } 
    
    private function _init(){

        $this->output->set_template('exquiso_theme');
                    
    }
    
    public function Destime()
    {
        $page = 'DesTime Apps';

        $this->set_activepage($page);
        $this->set_bc($page,'home/destime');
        
        $this->data['size'] = $this->data['dwldspd'] = $this->data['dwldspds'] = $this->data['estime'] = $this->data['errspds'] = null ;
		//echo '<b> Download Estimated Time Apps</b><br />';
		
		$this->form_validation->set_rules('size', 'Est Size', 'number|required|greater_than[0]');
		$this->form_validation->set_rules('speeds', 'Speeds', 'number|greater_than[0]');
		$this->form_validation->set_rules('speed', 'Speed', 'number|greater_than[0]');
		
		if($this->form_validation->run() == TRUE)
		{
			$this->data['size'] = ($this->input->post('size'))*1024;
			$this->data['dwldspd'] = $this->input->post('speed');
			$this->data['dwldspds'] = $this->input->post('speeds');
			
			if ($this->data['dwldspds']){
				$est = $this->data['size']/($this->data['dwldspds']/8);
				$this->data['estime'] = $est / 60;
			} elseif($this->data['dwldspd'])
			{
				$est = $this->data['size']/($this->data['dwldspd']);
				$this->data['estime'] = $est / 60;
			} else 
			{
				$this->data['errspds'] = "NetSpeed is Missing <br />";
				$this->data['size'] = $this->data['dwldspd'] = $this->data['dwldspds'] = $this->data['estime'] = null ;
			}
		}

		$this->data['sidebar'] = $this->load->view($this->template_dir.'sidebar/normal_r_1', $this->data, TRUE);
        $this->load->view($this->template_dir.'apps/destime', $this->data);
        
    }

    public function Stream($chl = null)
    {
        $page = 'Live TV';

        $this->set_activepage($page);
        $this->set_bc($page,'home/livetv');
       
		$defaulttvurl = 'http://172.27.27.23/tv';

		$this->data['layout'] = "fullwidthpg";
		$this->data['tvurl'] = '';


		if ($chl == "tv1"){
			$this->data['layout'] = "pglftsb";
			$this->data['tvurl'] = $chl . '.html';
		}else if ($chl == "tv2"){
			$this->data['layout'] = "pglftsb";
			$this->data['tvurl'] = $chl . '.html';
		}else if ($chl == "tv3"){
			$this->data['layout'] = "pglftsb";
			$this->data['tvurl'] = $chl . '.html';
		}else if ($chl == "tv4"){
			$this->data['layout'] = "pglftsb";
			$this->data['tvurl'] = $chl . '.html';
		}else if ($chl == "tv5"){
			$this->data['layout'] = "pglftsb";
			$this->data['tvurl'] = $chl . '.html';
		}else if ($chl == "tv6"){
			$this->data['layout'] = "pglftsb";
			$this->data['tvurl'] = $chl . '.html';
		}else if ($chl == "tv7"){
			$this->data['layout'] = "pglftsb";
			$this->data['tvurl'] = $chl . '.html';
		}else if ($chl == "tv8"){
			$this->data['layout'] = "pglftsb";
			$this->data['tvurl'] = $chl . '.html';
		}else if ($chl == "tv9"){
			$this->data['layout'] = "pglftsb";
			$this->data['tvurl'] = $chl . '.html';
		}

        $this->load->view($this->template_dir.'apps/livetv', $this->data);
        
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