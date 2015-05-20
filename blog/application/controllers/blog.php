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
}

