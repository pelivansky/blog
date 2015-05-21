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
		$data['top_article'] = $this->blog_model->getTopArticle();
		$this->load->view('prefooter',$data);
		$data['last_comment'] = $this->blog_model->getLastComm();
		$this->load->view('comments',$data);
		$this->load->view('footer');		
	}

	public function comment_by_book(){
		$data = array();
		$data['title'] = 'Comments';
		$this->load->view('head',$data);
		$this->load->view('left_menu');
		$data['article'] = $this->blog_model->getArtById();
		$data['comment'] = $this->blog_model->getComment();
		$this->load->view('content',$data);	
		$data['top_article'] = $this->blog_model->getTopArticle();
		$this->load->view('prefooter',$data);
		$data['last_comment'] = $this->blog_model->getLastComm();
		$this->load->view('comments',$data);
		$this->load->view('footer');	
	}

	function add_comment(){
		$this->validation();
		if($this->form_validation->run() == FALSE){
			redirect('blog/articles');
		}else{
			if($this->blog_model->add_comment() == TRUE){
				redirect('blog/comment_by_book/'.$this->input->post('url_seg'));
			}
		}
	}

	function validation(){
		$this->form_validation->set_rules('name','Name','trim|xss_clean|required');
		$this->form_validation->set_rules('comm','Comment','trim|xss_clean|required');
		
	}

}

