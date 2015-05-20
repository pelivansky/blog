<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct() {
        parent:: __construct();
        $this->load->model('blog_model');
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('table');
        $this->load->library('javascript');
    }	

	public function home()
	{
		$data['title'] = 'books';
		$this->load->view('head',$data);
		$this->load->view('content');
		$this->load->view('left_menu');
		$this->load->view('prefooter');
		$this->load->view('comments');
		$this->load->view('footer');
	}

	public function articles(){
		$data = array();
		$config = array();
		$config['base_url'] = base_url()."blog/articles";
		$total_row = $this->blog_model->count_articles();
		$config['total_rows'] = $total_row;
	    $config['per_page'] = 5;
	    $config['num_links'] = 1;
	    $config["uri_segment"] = 3;
	    $this->pagination->initialize($config);
	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;	    		
		$data['title'] = 'Articles';
		$this->load->view('head',$data);
		$this->load->view('left_menu');	
		$data['articles'] = $this->blog_model->getArtPag($config['per_page'], $page);
		$data['links'] = $this->pagination->create_links();			
		$this->load->view('article_content',$data);
		$this->load->view('prefooter');
		$this->load->view('comments');
		$this->load->view('footer');		
	}
}

