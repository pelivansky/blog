<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_Model extends CI_Model {

	function count_articles(){
		$q = $this->db->count_all_results('articles');
		return $q;
	}

	function articles(){
		$q = $this->db->get('articles');
		return $q->result();		
	}

	function getArtPag($limit,$start){
		$this->db->limit($limit,$start);
		$q = $this->db->get('articles');
		return $q->result();	
	}	

	function getTopArticle(){
		$this->db->order_by('nr_of_comments','desc');
		$this->db->limit(3);
		$q = $this->db->get('articles');
		return $q->result();
	}

	function getLastComm(){
		$this->db->order_by('post_id','desc');
		$this->db->limit(2);
		$q = $this->db->get('comments');
		return $q->result();
	}

	function getArtById(){
		$this->db->where('id',$this->uri->segment(3));
		$q = $this->db->get('articles');
		return $q->result();
	}

	function getComment(){
		$id = $this->uri->segment(3);
		$this->db->select('*');
		$this->db->from('articles');
		$this->db->where('id',$id);
		$this->db->join('comments','comments.article_id = articles.id');
		$q = $this->db->get();
		$nr = $q->num_rows();	
		$this->db->from('articles');
		$this->db->where('id',$id);
		$data = array(
				'nr_of_comments' => $nr
			);
		$this->db->update('articles',$data);		
		return $q->result();

	}

    public function add_comment(){
    	$data = array(
    				'name'         => $this->input->post('name'),
    				'post_content' => $this->input->post('comm'),
    				'time_posted'  => $this->input->post('date'),
    				'article_id'   => $this->input->post('url_seg')
    		);
    	$this->db->insert('comments', $data);
    	return $this->input->post('url_seg');
    	return TRUE;
    }

	function like($id){
		$this->db->where('id', $id);
		$q = $this->db->get('articles');
		$val = $q->row('likes');
		$data = array(
			'likes' => $val + 1
			);
		$this->db->where('id', $id);
		$this->db->update('articles',$data);
	} 
	function unlike($id){
		$this->db->where('id', $id);
		$q = $this->db->get('articles');
		$val = $q->row('dislikes');
		$data = array(
			'dislikes' => $val + 1
			);
		$this->db->where('id', $id);
		$this->db->update('articles',$data);
	} 

	function registering($name,$email,$phone,$pass){
			$info = array(
					'name'     =>  $name,
					'email'    =>  $email,
					'phone'    =>  $phone,
					'password' =>  $pass
			);
				$this->db->insert('users',$info);	
	}

	function loggingin($name,$pass){
		$this->db->where('name', $name);
		$this->db->where('password', $pass);
		$q = $this->db->get('users');
		if($q->num_rows()== 1){
			return TRUE;
		}else{
			return FALSE;
		}
	}

    function check_name($name){
		$this->db->where('name', $name);
		$q = $this->db->get('users');
		if($q->num_rows() > 0){
			return FALSE;
		}else{
			return TRUE;
		}
	}


	public function check_email($email){
		$this->db->where('email', $email);
		$q = $this->db->get('users');
		if($q->num_rows() > 0){
			return FALSE;
		}else{
			return TRUE;
		}
	}	

 
	public function check_phone($phone){
		$this->db->where('phone', $phone);
		$q = $this->db->get('users');
		if($q->num_rows() > 0){
			return FALSE;
		}else{
			return TRUE;
		}
	}			   
	
}	