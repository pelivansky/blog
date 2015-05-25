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

	public function home(){
		$data = array();
		$data['title'] = 'books';
		$this->load->view('head',$data);
		$this->load->view('left_menu');
		$this->load->view('home');
		$data['top_article'] = $this->blog_model->getTopArticle();
		$this->load->view('prefooter',$data);
		$data['last_comment'] = $this->blog_model->getLastComm();
		$this->load->view('comments',$data);
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

	function vote(){	

			$like   = $this->input->post('like');
			$unlike = $this->input->post('unlike');
			$id     = $this->input->post('id');
			if(isset($like) && !empty($like)){
				$this->blog_model->like($id);
			}elseif(isset($unlike) && !empty($unlike)){
				$this->blog_model->unlike($id);
			}
			$page = $this->uri->segment(3);
			redirect('blog/articles/'.$page);			
	}

	function gallery(){
		$data = array();	    		
		$data['title'] = 'Gallery';
		$this->load->view('head',$data);
		$this->load->view('left_menu');
		$data['articles'] = $this->blog_model->articles();
		$this->load->view('gallery',$data);					
		$data['top_article'] = $this->blog_model->getTopArticle();
		$this->load->view('prefooter',$data);
		$data['last_comment'] = $this->blog_model->getLastComm();
		$this->load->view('comments',$data);
		$this->load->view('footer');		
	}

	function contact(){
		$data = array();	    		
		$data['title'] = 'contact';
		$this->load->view('head',$data);
		$this->load->view('left_menu');
		$this->load->view('contact');					
		$data['top_article'] = $this->blog_model->getTopArticle();
		$this->load->view('prefooter',$data);
		$data['last_comment'] = $this->blog_model->getLastComm();
		$this->load->view('comments',$data);
		$this->load->view('footer');

	}
	function login(){
		$data = array();
		$data['title'] = 'login';
		$this->load->view('head',$data);
		$this->load->view('left_menu');
		$this->load->view('login');
		$data['top_article'] = $this->blog_model->getTopArticle();
		$this->load->view('prefooter',$data);
		$data['last_comment'] = $this->blog_model->getLastComm();
		$this->load->view('comments',$data);
		$this->load->view('footer');
	}

	function register(){
		$data = array();
		$data['title'] = 'register';
		$this->load->view('head',$data);
		$this->load->view('left_menu');
		$this->load->view('register');
		$data['top_article'] = $this->blog_model->getTopArticle();
		$this->load->view('prefooter',$data);
		$data['last_comment'] = $this->blog_model->getLastComm();
		$this->load->view('comments',$data);
		$this->load->view('footer');
	}	


	function register_validation(){
		$this->form_validation->set_rules('name','Name','trim|xss_clean|required|callback_check_name');
		$this->form_validation->set_rules('email','Email','trim|xss_clean|required|callback_check_email|valid_email');
		$this->form_validation->set_rules('phone','Phone','trim|xss_clean|required|numeric|callback_check_phone|min_length[10]|max_length[13]');
		$this->form_validation->set_rules('pass','Password','trim|xss_clean|required');	
		$this->form_validation->set_rules('pass_2','Password','trim|xss_clean|required|callback_check_pass');	

        $this->form_validation->set_message('required',' is required');
        $this->form_validation->set_message('min_length',' at least 10 characters');
        $this->form_validation->set_message('max_length','less than 13 characters');
        $this->form_validation->set_message('valid_email','must write valid email');

		if($this->form_validation->run()== FALSE){
			echo 'validation error';
		}else{
				if($this->blog_model->register() == FALSE){
					
				}else{
					redirect('blog/success');
				}
		}		
	}	
	function check_pass(){
			$pass   = $this->input->post('pass');
			$pass   = md5($pass);
			$pass_2 = $this->input->post('pass_2');
			$pass_2 = md5($pass_2);
			if($pass == $pass_2){
			 	$this->blog_model->register($pass);	
			}else{
				$this->form_validation->set_message('check_pass','passwords do not match');
			}		
	}

    function check_name(){
    	$name = $this->input->post('name');
    	$name = strtolower($name);  
		$res = $this->blog_model->check_name($name);	
    	if(!$res){
    		$this->form_validation->set_message('check_name', 'name exists');
    		return FALSE;
    	}else{
             return TRUE;
    	}
    }

    function check_email(){
    	$email = $this->input->post('email');
    	$email = strtolower($email);  
		$res = $this->blog_model->check_email($email);	
    	if(!$res){
    		$this->form_validation->set_message('check_email', 'diff email please');
    		return FALSE;
    	}else{
             return TRUE;
    	}
    }

    function check_phone(){
    	$phone = $this->input->post('phone');
		$res = $this->blog_model->check_phone($phone);     	
    	if(!$res){
    		$this->form_validation->set_message('check_phone', 'phone already taken');
    		return FALSE;   
    	}else{
 			return TRUE;
    	}
    } 		

}

