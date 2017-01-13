<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blogs extends MY_Controller {

	

	public function __construct(){

		parent::__construct();
		$this->load->library(array('pagination'));
		$this->load->helper(array());

		//$this->lang->load('clients');
		
		$this->_init();

		
		
		//$this->load->model('news_model');
		
	}
	
	private function _init()
	{

		$this->output->set_template('exquiso_theme');
	}
	
	public function Index()
	{
		

		$page = 'Blog';
		$this->set_activepage($page);
		$this->set_bc($page,'home/blog');

		$base_url = "blogs/index";
		$uri_segment = '3';
		$rows = $this->aa_model->post_all_count();

		$pagin = $this->blog_pagination($uri_segment, $base_url, $rows);
		
		$this->data['posts'] = $this->aa_model->blog_view_all_new($pagin['per_page'], $pagin['page']);
		//var_dump($this->data['posts']);
		$this->data['links'] = $pagin['links'];
		$this->get_blog_cat_tag();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['sidebar'] = $this->load->view($this->template_dir.'sidebar/blog_r_1', $this->data, TRUE);
		$this->load->view($this->template_dir.'blog/blog_index', $this->data);
		
	}

	public function category($id=NULL)
	{

		$page = 'Blog';
		$this->set_activepage($page);
		$this->set_bc($page,'home/blog');
		
		$id = ($this->aa_model->blog_cat_tag_check('category', $id) ? $id : '0');

		if ($id=='0') 
		{
			$this->session->set_flashdata('message', 'No Category Founds');
			redirect('blogs/index', 'refresh');
		}

		$base_url = "blogs/category";
		$uri_segment = '4';
		$rows = $this->aa_model->post_category_count($id);

		$pagin = $this->blog_pagination($uri_segment, $base_url, $rows);
		$this->data['links'] = $pagin['links'];

		$this->data['posts'] = $this->aa_model->blog_view_category($id, $pagin['per_page'], $pagin['page']);
		//var_dump($this->data['posts']);
		$posts = array_filter($this->data['posts']);
		if (empty($posts))
		{
			$this->session->set_flashdata('message', 'No Posts matched to this Category');
			redirect('blogs/index', 'refresh');
		}

		$this->data['message'] = $this->session->flashdata('message');
		$this->get_blog_cat_tag();
		$this->data['sidebar'] = $this->load->view($this->template_dir.'sidebar/blog_r_1', $this->data, TRUE);
		$this->load->view($this->template_dir.'blog/blog_index', $this->data);
		
	}

	public function tag($id=NULL)
	{

		$page = 'Blog';
		$this->set_activepage($page);
		$this->set_bc($page,'home/blog');
		
		$id = ($this->aa_model->blog_cat_tag_check('tag', $id) ? $id : '0');

		if ($id=='0') 
		{
			$this->session->set_flashdata('message', 'No Tag Founds');
			redirect('blogs/index', 'refresh');
		}

		$base_url = "blogs/tag";
		$uri_segment = '4';
		$rows = $this->aa_model->post_tag_count($id);

		$pagin = $this->blog_pagination($uri_segment, $base_url, $rows);
		$this->data['links'] = $pagin['links'];

		$this->data['posts'] = $this->aa_model->blog_view_tag($id, $pagin['per_page'], $pagin['page']);
		//var_dump($this->data['posts']);

		$posts = array_filter($this->data['posts']);
		if (empty($posts))
		{
			$this->session->set_flashdata('message', 'No Posts matched to this Tag');
			redirect('blogs/index', 'refresh');
		}

		$this->data['message'] = $this->session->flashdata('message');
		$this->get_blog_cat_tag();
		$this->data['sidebar'] = $this->load->view($this->template_dir.'sidebar/blog_r_1', $this->data, TRUE);
		$this->load->view($this->template_dir.'blog/blog_index', $this->data);
		
	}

	public function View($postid=NULL)
	{
		
		$page = 'Blog';
		$this->set_activepage($page);
		$this->set_bc($page,'home/blog/view');

		$postid = ($this->aa_model->blog_cat_tag_check('post', $postid) ? $postid : '0');

		if ($postid=='0') 
		{
			$this->session->set_flashdata('message', 'No Post Founds');
			redirect('blogs/index', 'refresh');
		}


		
		$this->data['content'] = $this->aa_model->blog_view_post($postid);
		
		$this->get_blog_cat_tag();
		$this->data['sidebar'] = $this->load->view($this->template_dir.'sidebar/blog_r_1', $this->data, TRUE);
		$this->load->view($this->template_dir.'blog/blog_view_post', $this->data);
		
	}
	
	public function Add_post()
	{
		
		$page = 'Blog';
		$this->set_activepage($page);
		$this->set_bc($page,'home/blog/add');

		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			$this->session->set_userdata('last_page', current_url()); redirect('users/login', 'refresh');
		}

		//$tables = $this->config->item('tables','ion_auth');
		//echo $this->input->post('agent_name');
		// validate form input
		$this->form_validation->set_rules('agent_name', $this->lang->line('client_agentname_label'), 'required|trim|xss_clean|callback_agent_id_check');
		$this->form_validation->set_rules('collegeid', $this->lang->line('college_id_label'), 'callback_agent_college_check');


		
		$this->data['content'] = $this->aa_model->blog_view_post($postid);
		
		$this->get_blog_cat_tag();
		$this->data['sidebar'] = $this->load->view($this->template_dir.'sidebar/blog_r_1', $this->data, TRUE);
		$this->load->view($this->template_dir.'blog/blog_view_post', $this->data);
		
	}

	public function blog_pagination($uri_segment,$base_url,$rows){


		$config = array();
        $config["base_url"] = (isset($base_url)) ? base_url() . "$base_url" : base_url() . "blogs/index";
        $config["total_rows"] = $rows;
        $config["per_page"] = 2;
        $config["uri_segment"] = (isset($base_url)) ? $uri_segment : "3";

        $this->pagination->initialize($config);

        $pagin['page'] = ($this->uri->segment($config["uri_segment"])) ? $this->uri->segment($config["uri_segment"]) : 0;
        $pagin['per_page'] = $config['per_page'];
        $pagin['links'] = $this->pagination->create_links();

        return $pagin;

    }

    public function add()
	{
		
		$page = 'Blog Post Add';
		$this->set_activepage($page);
		$this->set_bc($page,'home/blog/add');
		
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			// redirect them to the login page
			$this->session->set_userdata('last_page', current_url()); redirect('users/login', 'refresh');
			//echo "Redirect to Login";
		}

		$this->form_validation->set_rules('posttitle', $this->lang->line('blog_post_title'), 'required|trim|xss_clean');
		$this->form_validation->set_rules('content', $this->lang->line('blog_post_content'), 'required|trim|xss_clean');
		$this->form_validation->set_rules('image_url', $this->lang->line('blog_post_content'), 'required|trim|xss_clean');
		$this->form_validation->set_rules('category', $this->lang->line('blog_post_content'), 'required|trim|xss_clean');
		$this->form_validation->set_rules('tags', $this->lang->line('blog_post_content'), 'required|trim|xss_clean');
		$this->form_validation->set_rules('userid', $this->lang->line('blog_post_content'), 'required|trim|xss_clean');

		if ($this->form_validation->run() == true)
		{
			
			$additional_data = array(
				'title' => $this->input->post('posttitle'),
				'contents' => $this->input->post('content'),
				'image_urls' => $this->input->post('image_url'),
				'userid' => $this->input->post('userid'),

			);
		}

		if ($this->form_validation->run() == true && $this->ion_auth->is_admin())
		{
			if ($this->aa_model->blog_post_add($additional_data))
			{
				$this->sms = $this->aa_model->get_sms();
				//var_dump($this->sms);
				$this->session->set_flashdata('message', $this->yapps_model->errors());
			} else { $this->session->set_flashdata('message', $this->yapps_model->errors()); }
			

			redirect("blogs/index", 'refresh');
		}
		else
		{
			// display the create user form
			// set the flash data error message if there is one
			//$this->data['message'] = $this->session->flashdata('message');//$this->yapps_model->errors();
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->yapps_model->errors() ? $this->yapps_model->errors() : $this->session->flashdata('message')));

			
			$this->data['firstname'] = array(
				'name'  => 'firstname',
				'id'    => 'firstname',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('firstname'),
			);
			$this->data['lastname'] = array(
				'name'  => 'lastname',
				'id'    => 'lastname',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('lastname'),
			);
		
			$this->load->view($this->template_dir.'blog/blog_add_post', $this->data); 
		}
		
	}
	
}